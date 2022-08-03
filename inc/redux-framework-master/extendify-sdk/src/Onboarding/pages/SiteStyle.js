import {
    useCallback,
    useEffect,
    useState,
    useRef,
    useMemo,
} from '@wordpress/element'
import { __, sprintf } from '@wordpress/i18n'
import { getStyles } from '@onboarding/api/DataApi'
import { StylePreview } from '@onboarding/components/StyledPreview'
import { useFetch } from '@onboarding/hooks/useFetch'
import { useIsMountedLayout } from '@onboarding/hooks/useIsMounted'
import { PageLayout } from '@onboarding/layouts/PageLayout'
import { usePagesStore } from '@onboarding/state/Pages'
import { useProgressStore } from '@onboarding/state/Progress'
import { useUserSelectionStore } from '@onboarding/state/UserSelections'
import { SpinnerIcon } from '@onboarding/svg'

export const fetcher = (params) => getStyles(params)
export const fetchData = (siteType) => {
    siteType = siteType ?? useUserSelectionStore?.getState().siteType
    return {
        key: 'site-style',
        siteType: siteType?.slug ?? 'default',
        styles: siteType?.styles ?? [],
    }
}
export const metadata = {
    key: 'style',
    title: __('Design', 'extendify'),
    completed: () => true,
}
export const SiteStyle = () => {
    const siteType = useUserSelectionStore((state) => state.siteType)
    const { data: styleData, loading } = useFetch(fetchData, fetcher)
    const once = useRef(false)
    const stylesRef = useRef()
    const isMounted = useIsMountedLayout()
    const [styles, setStyles] = useState([])

    useEffect(() => {
        if (!styleData?.length) return
        ;(async () => {
            for (const style of styleData) {
                if (!isMounted.current) return
                setStyles((styles) => [...styles, style])
                await new Promise((resolve) => setTimeout(resolve, 1000))
            }
        })()
    }, [styleData, isMounted])

    useEffect(() => {
        if (styles?.length && !useUserSelectionStore.getState().style) {
            useUserSelectionStore.getState().setStyle(styles[0])
        }
    }, [styles])

    useEffect(() => {
        if (!styles?.length || once.current) return
        once.current = true
        // Focus the first style
        stylesRef?.current?.querySelector('[role=button]')?.focus()
    }, [styles])

    return (
        <PageLayout>
            <div>
                <h1 className="text-3xl text-partner-primary-text mb-4 mt-0">
                    {sprintf(
                        __(
                            'Now pick a design for your new %s site.',
                            'extendify',
                        ),
                        siteType?.label?.toLowerCase(),
                    )}
                </h1>
                <p className="text-base opacity-70 mb-0">
                    {__('You can personalize this later.', 'extendify')}
                </p>
            </div>
            <div className="w-full">
                <h2 className="text-lg m-0 mb-4 text-gray-900">
                    {loading
                        ? __(
                              'Please wait a moment while we generate style previews...',
                              'extendify',
                          )
                        : __('Pick your style', 'extendify')}
                </h2>
                <div ref={stylesRef} className="lg:flex gap-6 flex-wrap">
                    {styles?.map((style) => (
                        <StylePreviewWrapper
                            key={style.recordId}
                            style={style}
                        />
                    ))}
                    {/* Budget skeleton loaders */}
                    {styleData?.slice(styles?.length).map((data) => (
                        <div
                            key={data.slug}
                            style={{ height: 600, width: 425 }}
                            className="relative">
                            <div className="bg-gray-50 h-full w-full flex items-center justify-center">
                                <SpinnerIcon className="spin w-8" />
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </PageLayout>
    )
}

const StylePreviewWrapper = ({ style }) => {
    const nextPage = usePagesStore((state) => state.nextPage)
    const touch = useProgressStore((state) => state.touch)
    const selectStyle = useCallback(
        (style) => {
            useUserSelectionStore.getState().setStyle(style)
            touch(metadata.key)
            nextPage()
        },
        [nextPage, touch],
    )
    const context = useMemo(
        () => ({
            type: 'style',
            detail: style.slug,
            measure: true,
        }),
        [style],
    )
    return (
        <div className="relative" style={{ height: 600, width: 425 }}>
            <StylePreview
                style={style}
                context={context}
                selectStyle={selectStyle}
                blockHeight={600}
            />
        </div>
    )
}
