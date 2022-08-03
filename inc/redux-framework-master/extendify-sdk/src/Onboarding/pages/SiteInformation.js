import { useEffect, useRef } from '@wordpress/element'
import { __ } from '@wordpress/i18n'
import { getOption } from '@onboarding/api/WPApi'
import { useFetch } from '@onboarding/hooks/useFetch'
import { PageLayout } from '@onboarding/layouts/PageLayout'
import { usePagesStore } from '@onboarding/state/Pages'
import { useProgressStore } from '@onboarding/state/Progress'
import { useUserSelectionStore } from '@onboarding/state/UserSelections'

export const fetcher = async () => {
    const title = await getOption('blogname')
    return { title }
}
export const fetchData = () => ({ key: 'site-info' })
export const metadata = {
    key: 'site-title',
    title: __('Site Title', 'extendify'),
    completed: () => true,
}
export const SiteInformation = () => {
    const { siteInformation, setSiteInformation } = useUserSelectionStore()
    const initialFocus = useRef(null)
    const nextPage = usePagesStore((state) => state.nextPage)
    const { data: existingSiteInfo } = useFetch(fetchData, fetcher)
    const touch = useProgressStore((state) => state.touch)

    useEffect(() => {
        const raf = requestAnimationFrame(() => initialFocus.current.focus())
        return () => cancelAnimationFrame(raf)
    }, [initialFocus])

    useEffect(() => {
        if (existingSiteInfo?.title && siteInformation?.title === undefined) {
            setSiteInformation('title', existingSiteInfo.title)
        }
    }, [existingSiteInfo, setSiteInformation, siteInformation])

    return (
        <PageLayout>
            <div>
                <h1 className="text-3xl text-partner-primary-text mb-4 mt-0">
                    {__("What's the name of your new site?", 'extendify')}
                </h1>
                <p className="text-base opacity-70 mb-0">
                    {__('You can change this later.', 'extendify')}
                </p>
            </div>
            <div className="w-full">
                <form
                    onSubmit={(e) => {
                        e.preventDefault()
                        nextPage()
                    }}>
                    <label
                        htmlFor="extendify-site-title-input"
                        className="block text-lg m-0 mb-4 font-semibold text-gray-900">
                        {__("What's the name of your site?", 'extendify')}
                    </label>
                    <div className="mb-8">
                        <input
                            autoComplete="off"
                            ref={initialFocus}
                            type="text"
                            name="site-title-input"
                            id="extendify-site-title-input"
                            className="w-96 max-w-full border h-12 input-focus"
                            value={siteInformation?.title ?? ''}
                            onChange={(e) => {
                                setSiteInformation('title', e.target.value)
                                touch(metadata.key)
                            }}
                            placeholder={__(
                                'Enter your preferred site title...',
                                'extendify',
                            )}
                        />
                    </div>
                </form>
            </div>
        </PageLayout>
    )
}
