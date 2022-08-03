import { getTemplate } from '@onboarding/api/DataApi'
import {
    updateOption,
    createPage,
    trashPost,
    getPost,
    updateThemeVariation,
} from '@onboarding/api/WPApi'

export const createWordpressPages = async (pages, siteType, style) => {
    const pageIds = {}
    for (const page of pages) {
        const template = await getTemplate({
            siteType: siteType.slug,
            layoutType: page.slug,
            baseLayout: page.slug === 'home' ? style?.homeBaseLayout : null,
            kit: page.slug !== 'home' ? style?.kit : null,
        })
        let content = ''
        if (template?.data) {
            content = [template?.data?.code, template?.data?.code2]
                .filter(Boolean)
                .join('')
        }

        const name = page.slug
        // Get content
        const result = await createPage({
            title: page.title,
            name,
            status: 'publish',
            content: content,
            template: 'no-title',
            meta: { made_with_extendify_launch: true },
        })
        pageIds[name] = { id: result.id, title: page.title }
    }
    // When we have home and blog, set reading setting
    if (pageIds?.home) {
        await updateOption('show_on_front', 'page')
        await updateOption('page_on_front', pageIds.home.id)
        if (pageIds?.blog) await updateOption('page_for_posts', pageIds.blog)
    }

    // If we've created pages, consider the onboarding in a completed state
    await updateOption(
        'extendify_onboarding_completed',
        new Date().toISOString(),
    )
    return pageIds
}

export const trashWordpressPages = (posts) => {
    posts.forEach(async (el) => {
        // Try and retrieve posts via slug.
        const post = await getPost(el.slug, el.type)

        // If post exists (but not trashed) then send it to trash.
        if (post?.length && post[0].status !== 'trash') {
            await trashPost(post[0].id, el.type)
        }
    })
}

export const updateGlobalStyleVariant = (variation) =>
    updateThemeVariation(window.extOnbData.globalStylesPostID, variation)
