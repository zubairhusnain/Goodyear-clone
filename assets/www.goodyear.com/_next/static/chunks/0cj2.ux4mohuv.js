(globalThis.TURBOPACK||(globalThis.TURBOPACK=[])).push(["object"==typeof document?document.currentScript:void 0,214260,e=>{"use strict";let t;var r=e.i(731074),i=e.i(749988),a=e.i(931541),s=e.i(126799),n=e.i(37655),l=e.i(644398),o=e.i(286954),c=e.i(664683),u=class extends n.Subscribable{constructor(e,t){super(),this.options=t,this.#e=e,this.#t=null,this.#r=(0,l.pendingThenable)(),this.bindMethods(),this.setOptions(t)}#e;#i=void 0;#a=void 0;#s=void 0;#n;#l;#r;#t;#o;#c;#u;#d;#h;#m;#p=new Set;bindMethods(){this.refetch=this.refetch.bind(this)}onSubscribe(){1===this.listeners.size&&(this.#i.addObserver(this),d(this.#i,this.options)?this.#f():this.updateResult(),this.#y())}onUnsubscribe(){this.hasListeners()||this.destroy()}shouldFetchOnReconnect(){return h(this.#i,this.options,this.options.refetchOnReconnect)}shouldFetchOnWindowFocus(){return h(this.#i,this.options,this.options.refetchOnWindowFocus)}destroy(){this.listeners=new Set,this.#g(),this.#b(),this.#i.removeObserver(this)}setOptions(e){let t=this.options,r=this.#i;if(this.options=this.#e.defaultQueryOptions(e),void 0!==this.options.enabled&&"boolean"!=typeof this.options.enabled&&"function"!=typeof this.options.enabled&&"boolean"!=typeof(0,o.resolveEnabled)(this.options.enabled,this.#i))throw Error("Expected enabled to be a boolean or a callback that returns a boolean");this.#x(),this.#i.setOptions(this.options),t._defaulted&&!(0,o.shallowEqualObjects)(this.options,t)&&this.#e.getQueryCache().notify({type:"observerOptionsUpdated",query:this.#i,observer:this});let i=this.hasListeners();i&&m(this.#i,r,this.options,t)&&this.#f(),this.updateResult(),i&&(this.#i!==r||(0,o.resolveEnabled)(this.options.enabled,this.#i)!==(0,o.resolveEnabled)(t.enabled,this.#i)||(0,o.resolveStaleTime)(this.options.staleTime,this.#i)!==(0,o.resolveStaleTime)(t.staleTime,this.#i))&&this.#v();let a=this.#T();i&&(this.#i!==r||(0,o.resolveEnabled)(this.options.enabled,this.#i)!==(0,o.resolveEnabled)(t.enabled,this.#i)||a!==this.#m)&&this.#R(a)}getOptimisticResult(e){var t,r;let i=this.#e.getQueryCache().build(this.#e,e),a=this.createResult(i,e);return t=this,r=a,(0,o.shallowEqualObjects)(t.getCurrentResult(),r)||(this.#s=a,this.#l=this.options,this.#n=this.#i.state),a}getCurrentResult(){return this.#s}trackResult(e,t){return new Proxy(e,{get:(e,r)=>(this.trackProp(r),t?.(r),"promise"===r&&(this.trackProp("data"),this.options.experimental_prefetchInRender||"pending"!==this.#r.status||this.#r.reject(Error("experimental_prefetchInRender feature flag is not enabled"))),Reflect.get(e,r))})}trackProp(e){this.#p.add(e)}getCurrentQuery(){return this.#i}refetch({...e}={}){return this.fetch({...e})}fetchOptimistic(e){let t=this.#e.defaultQueryOptions(e),r=this.#e.getQueryCache().build(this.#e,t);return r.fetch().then(()=>this.createResult(r,t))}fetch(e){return this.#f({...e,cancelRefetch:e.cancelRefetch??!0}).then(()=>(this.updateResult(),this.#s))}#f(e){this.#x();let t=this.#i.fetch(this.options,e);return e?.throwOnError||(t=t.catch(o.noop)),t}#v(){this.#g();let e=(0,o.resolveStaleTime)(this.options.staleTime,this.#i);if(i.environmentManager.isServer()||this.#s.isStale||!(0,o.isValidTimeout)(e))return;let t=(0,o.timeUntilStale)(this.#s.dataUpdatedAt,e);this.#d=c.timeoutManager.setTimeout(()=>{this.#s.isStale||this.updateResult()},t+1)}#T(){return("function"==typeof this.options.refetchInterval?this.options.refetchInterval(this.#i):this.options.refetchInterval)??!1}#R(e){this.#b(),this.#m=e,!i.environmentManager.isServer()&&!1!==(0,o.resolveEnabled)(this.options.enabled,this.#i)&&(0,o.isValidTimeout)(this.#m)&&0!==this.#m&&(this.#h=c.timeoutManager.setInterval(()=>{(this.options.refetchIntervalInBackground||r.focusManager.isFocused())&&this.#f()},this.#m))}#y(){this.#v(),this.#R(this.#T())}#g(){this.#d&&(c.timeoutManager.clearTimeout(this.#d),this.#d=void 0)}#b(){this.#h&&(c.timeoutManager.clearInterval(this.#h),this.#h=void 0)}createResult(e,t){let r,i=this.#i,a=this.options,n=this.#s,c=this.#n,u=this.#l,h=e!==i?e.state:this.#a,{state:f}=e,y={...f},g=!1;if(t._optimisticResults){let r=this.hasListeners(),n=!r&&d(e,t),l=r&&m(e,i,t,a);(n||l)&&(y={...y,...(0,s.fetchState)(f.data,e.options)}),"isRestoring"===t._optimisticResults&&(y.fetchStatus="idle")}let{error:b,errorUpdatedAt:x,status:v}=y;r=y.data;let T=!1;if(void 0!==t.placeholderData&&void 0===r&&"pending"===v){let e;n?.isPlaceholderData&&t.placeholderData===u?.placeholderData?(e=n.data,T=!0):e="function"==typeof t.placeholderData?t.placeholderData(this.#u?.state.data,this.#u):t.placeholderData,void 0!==e&&(v="success",r=(0,o.replaceData)(n?.data,e,t),g=!0)}if(t.select&&void 0!==r&&!T)if(n&&r===c?.data&&t.select===this.#o)r=this.#c;else try{this.#o=t.select,r=t.select(r),r=(0,o.replaceData)(n?.data,r,t),this.#c=r,this.#t=null}catch(e){this.#t=e}this.#t&&(b=this.#t,r=this.#c,x=Date.now(),v="error");let R="fetching"===y.fetchStatus,C="pending"===v,S="error"===v,w=C&&R,k=void 0!==r,I={status:v,fetchStatus:y.fetchStatus,isPending:C,isSuccess:"success"===v,isError:S,isInitialLoading:w,isLoading:w,data:r,dataUpdatedAt:y.dataUpdatedAt,error:b,errorUpdatedAt:x,failureCount:y.fetchFailureCount,failureReason:y.fetchFailureReason,errorUpdateCount:y.errorUpdateCount,isFetched:e.isFetched(),isFetchedAfterMount:y.dataUpdateCount>h.dataUpdateCount||y.errorUpdateCount>h.errorUpdateCount,isFetching:R,isRefetching:R&&!C,isLoadingError:S&&!k,isPaused:"paused"===y.fetchStatus,isPlaceholderData:g,isRefetchError:S&&k,isStale:p(e,t),refetch:this.refetch,promise:this.#r,isEnabled:!1!==(0,o.resolveEnabled)(t.enabled,e)};if(this.options.experimental_prefetchInRender){let t=void 0!==I.data,r="error"===I.status&&!t,a=e=>{r?e.reject(I.error):t&&e.resolve(I.data)},s=()=>{a(this.#r=I.promise=(0,l.pendingThenable)())},n=this.#r;switch(n.status){case"pending":e.queryHash===i.queryHash&&a(n);break;case"fulfilled":(r||I.data!==n.value)&&s();break;case"rejected":r&&I.error===n.reason||s()}}return I}updateResult(){let e=this.#s,t=this.createResult(this.#i,this.options);if(this.#n=this.#i.state,this.#l=this.options,void 0!==this.#n.data&&(this.#u=this.#i),(0,o.shallowEqualObjects)(t,e))return;this.#s=t;let r=()=>{if(!e)return!0;let{notifyOnChangeProps:t}=this.options,r="function"==typeof t?t():t;if("all"===r||!r&&!this.#p.size)return!0;let i=new Set(r??this.#p);return this.options.throwOnError&&i.add("error"),Object.keys(this.#s).some(t=>this.#s[t]!==e[t]&&i.has(t))};this.#C({listeners:r()})}#x(){let e=this.#e.getQueryCache().build(this.#e,this.options);if(e===this.#i)return;let t=this.#i;this.#i=e,this.#a=e.state,this.hasListeners()&&(t?.removeObserver(this),e.addObserver(this))}onQueryUpdate(){this.updateResult(),this.hasListeners()&&this.#y()}#C(e){a.notifyManager.batch(()=>{e.listeners&&this.listeners.forEach(e=>{e(this.#s)}),this.#e.getQueryCache().notify({query:this.#i,type:"observerResultsUpdated"})})}};function d(e,t){return!1!==(0,o.resolveEnabled)(t.enabled,e)&&void 0===e.state.data&&("error"!==e.state.status||!1!==t.retryOnMount)||void 0!==e.state.data&&h(e,t,t.refetchOnMount)}function h(e,t,r){if(!1!==(0,o.resolveEnabled)(t.enabled,e)&&"static"!==(0,o.resolveStaleTime)(t.staleTime,e)){let i="function"==typeof r?r(e):r;return"always"===i||!1!==i&&p(e,t)}return!1}function m(e,t,r,i){return(e!==t||!1===(0,o.resolveEnabled)(i.enabled,e))&&(!r.suspense||"error"!==e.state.status)&&p(e,r)}function p(e,t){return!1!==(0,o.resolveEnabled)(t.enabled,e)&&e.isStaleByTime((0,o.resolveStaleTime)(t.staleTime,e))}e.i(510857);var f=e.i(420896),y=e.i(395486);e.i(901538);var g=f.createContext((t=!1,{clearReset:()=>{t=!1},reset:()=>{t=!0},isReset:()=>t})),b=f.createContext(!1);b.Provider;var x=(e,t,r)=>t.fetchOptimistic(e).catch(()=>{r.clearReset()});e.s(["useQuery",0,function(e,t){return function(e,t,r){let s,n=f.useContext(b),l=f.useContext(g),c=(0,y.useQueryClient)(r),u=c.defaultQueryOptions(e);c.getDefaultOptions().queries?._experimental_beforeQuery?.(u);let d=c.getQueryCache().get(u.queryHash);if(u._optimisticResults=n?"isRestoring":"optimistic",u.suspense){let e=e=>"static"===e?e:Math.max(e??1e3,1e3),t=u.staleTime;u.staleTime="function"==typeof t?(...r)=>e(t(...r)):e(t),"number"==typeof u.gcTime&&(u.gcTime=Math.max(u.gcTime,1e3))}s=d?.state.error&&"function"==typeof u.throwOnError?(0,o.shouldThrowError)(u.throwOnError,[d.state.error,d]):u.throwOnError,(u.suspense||u.experimental_prefetchInRender||s)&&!l.isReset()&&(u.retryOnMount=!1),f.useEffect(()=>{l.clearReset()},[l]);let h=!c.getQueryCache().get(u.queryHash),[m]=f.useState(()=>new t(c,u)),p=m.getOptimisticResult(u),v=!n&&!1!==e.subscribed;if(f.useSyncExternalStore(f.useCallback(e=>{let t=v?m.subscribe(a.notifyManager.batchCalls(e)):o.noop;return m.updateResult(),t},[m,v]),()=>m.getCurrentResult(),()=>m.getCurrentResult()),f.useEffect(()=>{m.setOptions(u)},[u,m]),u?.suspense&&p.isPending)throw x(u,m,l);if((({result:e,errorResetBoundary:t,throwOnError:r,query:i,suspense:a})=>e.isError&&!t.isReset()&&!e.isFetching&&i&&(a&&void 0===e.data||(0,o.shouldThrowError)(r,[e.error,i])))({result:p,errorResetBoundary:l,throwOnError:u.throwOnError,query:d,suspense:u.suspense}))throw p.error;if(c.getDefaultOptions().queries?._experimental_afterQuery?.(u,p),u.experimental_prefetchInRender&&!i.environmentManager.isServer()&&p.isLoading&&p.isFetching&&!n){let e=h?x(u,m,l):d?.promise;e?.catch(o.noop).finally(()=>{m.updateResult()})}return u.notifyOnChangeProps?p:m.trackResult(p)}(e,u,t)}],214260)},612024,e=>{"use strict";var t=e.i(998005);let r=`
  mutation FormSubmission(
    $formId: String!,
    $formName: String!,
    $formRequestId: String!,
    $submitType: String,
    $formType: String!,
    $formData: [FormSubmitFormDataInput!]!,
    $sourceData: FormSubmitSourceDataInput!,
    $promotionsInfo: FormSubmitPromotionsInfoInput,
    $emailRegistrationInfo: FormSubmitEmailRegistrationInfoInput,
  ) {
    formSubmission(
      formId: $formId
      formName: $formName
      formRequestId: $formRequestId
      submitType: $submitType
      formType: $formType
      formData: $formData
      sourceData: $sourceData
      promotionsInfo: $promotionsInfo
      emailRegistrationInfo: $emailRegistrationInfo
    ) {
      data {
        item {
          correlationId
          createdAt
          message
        }
      }
      metadata {
        usid
      }
      errors {
        message
        errorCode
        status
      }
    }
  }
`,i=`
  ... on FormTextModel {
    _path
    __typename
    type
    label
    name
    placeholder
    isRequired
    toolTip
    width
  }
`,a=`
  ... on FormTextAreaModel {
    _path
    __typename
    label
    name
    placeholder
    isRequired
    maxCharacterLength
    toolTip
    width
    type
  }
`,s=`
  ... on FormOptInCheckboxModel {
    _path
    __typename
    name
    type
    isRequired
    toolTip
    width
    description {
      html
    }
  }
`,n=`
  ... on FormDateModel {
    _path
    __typename
    label
    name
    placeholder
    dateFieldType
    validFromYearsAgo
    validTillYears
    dobAgeRestriction
    isRequired
    toolTip
    width
  }
`,l=`
  ... on FormSelectionModel {
    _path
    __typename
    type
    label
    name
    placeholder
    options
    isRequired
    toolTip
    width
  }
`,o=`
  ... on FormGroupModel {
    _path
    __typename
    enableMultiple
    maxCount
    buttonText
    buttonId
    formGroupFields {
      _path
      __typename
      type
      label
      name
      placeholder
      isRequired
      toolTip
      width
    }
  }
`,c=`
  ... on FormSectionModel {
    _path
    __typename
    headline
    sectionFields {
      ${i}
      ${n}
      ${o}
      ${a}
      ${l}
      ${s}
    }
  }
`,u=`
  query GetFormByPath(
   $brand: String!,
   $region: String!,
   $localeCountry: String!,
   $lob: String!,
   $pageName: String!
  ) {
    getFormByPath(
      brand: $brand
      region: $region
      localeCountry: $localeCountry
      lob: $lob
      pageName: $pageName
    ) {
      data {
        item {
          _path
          __typename
          headline
          formId
          formType
          formName
          submitType
          formRequestId
          emailSubmissionId
          sendEmailToUsers
          submitButtonText
          showArrowLink
          divider
          dailyLimitCheck
          errorMessageForDailyLimit
          componentWidth
          headingTag
          description {
            html
          }
          thankYouMessage {
            _path
            __typename
            icon
            tagStyle
            tagSize
            tag
            tagLabel
            eyebrow
            headline
            subtitle
            accessibilityLabel
            startDate
            startTime
            endDate
            endTime
            buttonLabel
            buttonUrl
            buttonAction
            buttonAccessibilityLabel
            tireFinderParamsForButton
            linkLabel
            linkUrl
            linkAction
            linkAccessibilityLabel
            tireFinderParamsForLink
            ctaLabel
            ctaUrl
            ctaAction
            ctaAccessibilityLabel
            onDark
            iconPosition
            alignment
            titleStyle
            textSize
            componentWidth
            tireFinderParamsForCTA
            description {
              html
            }
            buttonReferencePath {
              __typename
              _path
            }
            ctaReferencePath {
              __typename
              _path
            }
            linkReferencePath {
              __typename
              _path
            }
          }
          formContainerComponents {
            ${i}
            ${n}
            ${o}
            ${c}
            ${a}
            ${l}
            ${s}
          }
        }
      }
      errors {
        status
        message
        errorCode
        path
        details {
          message
          path
        }
      }
      metadata {
        usid
        customerGroup
      }
    }
  }
`;var d=e.i(715351),h=e.i(855336);let m=async({brand:e,pageName:t,localeCountry:r,lob:i,region:a},s)=>(0,h.graphqlService)({query:u,variables:{brand:e,pageName:t,localeCountry:r,lob:i,region:a},extraHeaders:{usid:s}}),p=({brand:e,pageName:t,localeCountry:r,lob:i,region:a})=>(0,d.graphqlClientProxy)({moduleName:"formQueries",queryName:"executeFormsQuery",payload:{brand:e,pageName:t,localeCountry:r,lob:i,region:a}}),f=async(e,t,i={})=>(0,h.graphqlService)({query:r,variables:e,extraHeaders:{...t?{usid:t}:{},...i}}),y=e=>{let{csrfToken:t,...r}=e;return(0,d.graphqlClientProxy)({moduleName:"formQueries",queryName:"executeFormSubmissionMutation",payload:r,csrfToken:t,formId:e.formId})};e.s(["executeFormSubmissionMutation",0,f,"executeFormsQuery",0,m,"fetchFormContent",0,p,"fetchFormContentQuery",0,({brand:e,pageName:r,localeCountry:i,lob:a,region:s})=>(0,t.queryOptions)({queryKey:["fetch-form",r],queryFn:async()=>p({brand:e,pageName:r,localeCountry:i,lob:a,region:s})}),"submitForm",0,y,"submitFormMutation",0,()=>({mutationKey:["form-submission"],mutationFn:async e=>y(e)})],612024)},119553,e=>{"use strict";var t=e.i(294718),r=e.i(277030),i=e.i(750987),a=e.i(18670),s=e.i(293769),n=e.i(611947),l=e.i(11201),o=e.i(862911),c=e.i(565904),u=e.i(371981),d=e.i(17404),h=e.i(612024),m=e.i(211241),p=e.i(864585),f=e.i(335073),y=e.i(470069),g=e.i(79486),b=e.i(937588),x=e.i(655127),v=e.i(420896),T=e.i(925732),R=e.i(457455),C=e.i(707691);e.s(["useClickWithTireFinderParams",0,({url:e,action:S,openPromotionModal:w,sendTireFinderParams:k,pageReference:I})=>{let _,$,F,{open:E}=(0,i.useTireFinderFlyout)(),L=(0,c.default)("fetch-form"),{brand:O,lob:M,locale_country:Q}=(0,o.useSiteInfo)(),P=(0,T.getTireFinderData)(),j=P?.userQualificationStatus===1,N=($=(0,s.c)(2),F=(0,l.useRouter)(),$[0]!==F?(_=(e,t)=>{if(!e||!t||t===n.ClickActionType.NONE||t===n.ClickActionType.FLYOUT||t===n.ClickActionType.POPUP||t===n.ClickActionType.OFFER_MODAL)return;let r=e.trim();if(!r)return;let i=r.startsWith("http://")||r.startsWith("https://");t===n.ClickActionType.NEW_TAB?window.open(r,"_blank","noopener,noreferrer"):t===n.ClickActionType.SAME_TAB&&(i?window.location.href=r:F.push(r))},$[0]=F,$[1]=_):_=$[1],_),D=(0,v.useRef)(null),A=(0,R.getClientCookie)(t.CookieKeys.SelectedStore)?.storeId??null,B=(0,y.useModalStore)(e=>e.setIsOpen),W=(0,f.useFlyoutStore)(e=>e.setIsOpen),q=(0,f.useFlyoutStore)(e=>e.setBodyContent),U=(0,y.useModalStore)(e=>e.setModalPageName),V=(0,f.useFlyoutStore)(e=>e.setHeaderContent),H=(0,b.getQueryParamsFromUrl)(P?.tireFinderURL??""),G=(0,r.useI18n)(n.i18nModels.PRODUCT_DETAILS_MODEL),[X,z]=(0,v.useState)(!1),K=(0,v.useMemo)(()=>(0,b.buildUrlWithQueryParams)(e??"",{...H,storeId:A}),[H,A]),Y=(0,v.useCallback)(e=>{if(!e?.__typename)return null;let t=(0,p.getComponentByID)(e.__typename);if(!t)return null;let r=(0,p.getEditableComponent)(e.__typename,t),i={customClassNames:{grid:"w-full ",form:"flex flex-col gap-8",fieldWrapper:"grid grid-cols-12 w-full gap-8",globalErrorMessage:"mb-2",gapBetweenElement:"gap-6"},...e};return v.default.createElement(r,i)},[]),J=(0,v.useCallback)(e=>v.default.createElement("div",{className:"flex flex-col gap-1"},v.default.createElement(d.Text,{variant:"subtitle-xl",tag:"h2"},e?.headline),(0,a.renderDescription)(e?.description)),[]),Z=(0,v.useCallback)(async e=>{try{let t={brand:O,lob:M,localeCountry:(0,b.formatLocale)(Q),region:(0,g.getRegionFromLocale)(Q),pageName:e},r=await L.fetchQuery((0,h.fetchFormContentQuery)(t)),i=r?.getFormByPath?.data?.item;if(i){let e={headline:i?.headline,description:i?.description},t={...i,headline:"",description:""},r=J(e),a=Y(t);r&&V(r),a&&q(a)}}catch(e){q(null),V(null)}finally{z(!1)}},[O,Q,M,q,V,Y,J,L]),ee=(0,v.useCallback)(async e=>{z(!0);try{let t=await (0,m.fetchPromotionDetails)({ids:[e]}),r=t?.getPromotionDetails?.data?.data?.[0]||null,{contentBody:i,contentHeading:a}=(0,C.getPromotionContent)(X,r,G);q(i),V(a)}catch(r){let{contentBody:e,contentHeading:t}=(0,C.getPromotionContent)(!1,null,G);q(e),V(t)}finally{z(!1)}},[G]);return(0,v.useCallback)(async t=>{if(t&&"preventDefault"in t&&t.preventDefault(),S===n.ClickActionType.FLYOUT){let t=I?._path,r=I?.__typename;if("#vehicleTF"===e||"#tireSizeTF"===e)return void E(D,P?.selectorType);if("#newsletterForm"===e)return void W(!0);if(e?.toLowerCase().includes("#offer|")){let t=e?.replace(/#offer\|/i,"")||"",{contentBody:r,contentHeading:i}=(0,C.getPromotionContent)(!0,null,G);q(r),V(i),W(!0),ee(t);return}t&&"FormContainerModel"===r&&(z(!0),q(v.default.createElement("div",{className:"flex items-center justify-center h-32 w-full"},v.default.createElement(u.Loader))),W(!0),await Z(t))}if(S===n.ClickActionType.POPUP){let e=I?._path;if(e){let t=(0,x.resolveUrl)(e);if(t.includes(`/${Q}`)){let e=t.split(`/${Q}`)[1];e?.startsWith("/modals/")||e?.startsWith("modals/")?U(t.replace(RegExp(`/${Q}/modals`),"modals")):U(t.replace(`/${Q}`,"pages"))}else U(e);B(!0);return}}if(S===n.ClickActionType.OFFER_MODAL)if(e?.toLowerCase().includes("#offer|")){let t=e?.replace(/#offer\|/i,"")||"";w?.(t)}else w?.(e||"");if(!e)return void N(null,S);let r=(0,x.resolveUrl)(e);if(r.includes("#")&&S===n.ClickActionType.SAME_TAB){let e=r.indexOf("#"),t=r.slice(e+1);if(document.getElementById(t)){let t=r.slice(e);if(globalThis.location.hash===t){let e=`${globalThis.location.pathname}${globalThis.location.search}`;globalThis.history.replaceState?.(null,"",e),setTimeout(()=>{globalThis.history.replaceState?.(null,"",t)},0)}else globalThis.history.pushState?.(null,"",t);return}}k&&j&&A&&S!==n.ClickActionType.NONE?N((0,x.resolveUrl)(K),S):N((0,x.resolveUrl)(e),S)},[S,e,E,N,k,j,K,P?.selectorType,G,ee,Z])}],119553)},378406,e=>{"use strict";var t=e.i(293769),r=e.i(925732),i=e.i(457455),a=e.i(214260),s=e.i(11201),n=e.i(420896),l=e.i(610145),o=e.i(687466),c=e.i(294718),u=e.i(952462),d=e.i(394476),h=e.i(784362),m=e.i(937588);e.s(["useServiceRecommendationConfig",0,function(e){let r,i,a=(0,t.c)(6),{getPreferences:s}=(0,u.useSitePreferences)();a[0]!==s?(r=s(),a[0]=s,a[1]=r):r=a[1];let n=r,l=n?.enableServicesRecommendation,o=n?.servicesRecommendationLength||6,c=l?.[e]===!0;return a[2]!==l||a[3]!==c||a[4]!==o?(i={isEnabled:c,length:o,allConfig:l},a[2]=l,a[3]=c,a[4]=o,a[5]=i):i=a[5],i},"useServiceRecommendations",0,(e,t=h.InstallerTypes.IN_STORE,u,p)=>{let f=e??null,y=t;"service-pdp"===u&&(f=e??null,y=e?h.InstallerTypes.IN_STORE:null);let g=!!e,b=(0,s.useParams)(),x=(0,s.usePathname)(),v=b?.brand||o.defaultBrand,T=b?.locale_country||o.defaultLocaleCountry,R=b?.lob||o.defaultLob,C=(0,n.useMemo)(()=>(0,m.normalizeLocale)(T),[T]),S=(0,n.useMemo)(()=>o.localeToRegion[T.toLowerCase()]||o.defaultRegion,[T]),w=(0,n.useMemo)(()=>x||"/template",[x]),k=(0,r.getTireFinderData)(),I=(0,i.getClientCookie)(c.CookieKeys.SelectedZipCode),_=(0,n.useMemo)(()=>(y===h.InstallerTypes.ROLL||y===h.InstallerTypes.ROLL_MOBILE)&&k?.selectorType==="tireSize"?"":k?.selectorType==="vehicle"&&k?.vehicle?.vehicleId?k.vehicle.vehicleId:"",[k,y]),$=(0,n.useMemo)(()=>I?.zip||"",[I]),F=(0,n.useMemo)(()=>{if((y===h.InstallerTypes.ROLL||y===h.InstallerTypes.ROLL_MOBILE)&&p){if(!p||!("shipments"in p)||!p.shipments)return"";for(let e of p.shipments)if(e&&"object"==typeof e&&"installerType"in e){let t=e.installerType;if((t===h.InstallerTypes.ROLL||t===h.InstallerTypes.ROLL_MOBILE)&&"items"in e){for(let t of e.items??[])if(t?.productType===h.CartProductItemType.TIRE&&t?.productId)return t.productId}}}return""},[y,p]);return(0,a.useQuery)({queryKey:["serviceRecommendations",v,S,C,R,w,f,y,u,_,$,F],queryFn:async()=>{try{return await (0,d.getCartServiceRecommendationsAPI)({brand:v,region:S,locale:C,lob:R,pageName:w,storeId:f,installerType:y,vehicleId:_||"",zipCode:$||null,rollMobileProductID:F||null})}catch{return{getServiceRecommendations:{data:[],metadata:{usid:null}}}}},enabled:"service-pdp"===u||g,...l.QueryCache.serviceRecommendations,retry:!1,refetchOnWindowFocus:!1})}])},282060,e=>{"use strict";var t=e.i(901538),r=e.i(633281),i=e.i(294237),a=e.i(420896),s=e.i(708047),n=e.i(986726),l=e.i(818756),o=e.i(444348),c=e.i(969110),u=e.i(872919);let d={extraLarge:"xl",large:"lg",medium:"md",small:"sm",extraSmall:"xs"},h={extraSmall:{grid:"grid-cols-12",header:"col-start-1 col-span-12 md:col-span-4",headerCenter:"col-span-12 md:col-span-4 md:col-start-5"},small:{grid:"grid-cols-12",header:"col-start-1 col-span-12 md:col-span-6",headerCenter:"col-span-12 md:col-span-6 md:col-start-4"},medium:{grid:"grid-cols-12",header:"col-start-1 col-span-12 md:col-span-8",headerCenter:"col-span-12 md:col-span-8 md:col-start-3"},large:{grid:"grid-cols-12",header:"col-start-1 col-span-12 md:col-span-10",headerCenter:"col-span-12 md:col-span-10 md:col-start-2"},extraLarge:{grid:"grid-cols-12",header:"col-start-1 col-span-12",headerCenter:"col-span-12"}},m=(0,i.cva)("flex  flex-row items-center gap-6 ",{variants:{alignment:{onlyCta:"items-start",withButton:"items-center"},justify:{left:"justify-start",center:"justify-center",leftSmRight:"justify-start sm:justify-end"}},defaultVariants:{alignment:"withButton",justify:"left"}}),p=(0,i.cva)("w-full sm:w-fit",{variants:{textAlign:{left:"text-left",center:"text-center",leftSmRight:"text-left sm:text-right"}},defaultVariants:{textAlign:"left"}}),f=(0,a.memo)(({headline:e,headingTag:i="h2",headerPosition:f="fullWidth",mode:y,eyebrow:g,divider:b=!1,ctaLabel:x,ctaUrl:v,ctaAction:T,ctaAccessibilityLabel:R,baseQaId:C,tracking:S={},inheritBackground:w=!1,onDark:k,headerTitleWidth:I="medium",headingStyle:_="heading",alignment:$,buttonAccessibilityLabel:F,buttonLabel:E,buttonAction:L,buttonUrl:O,buttonTracking:M,ctaTracking:Q,description:P,onHandleButtonClick:j,onHandleLinkClick:N,headlineSize:D="medium",className:A})=>{let B,W,q="dark"===y||k?"dark":"light",U=d[D],V=h[I],H=(0,a.useMemo)(()=>"display"===_?`scripted-${U}`:"sm"===U?"eyebrow-md":`eyebrow-${U}`,[_,U]),G=x&&!E?"onlyCta":"withButton",X=(0,a.useMemo)(()=>{let e={left:"justify-start",center:"justify-center",right:"justify-end"};return $?e[$]:"center"===f?e.center:e.left},[$,f]),z=(0,a.useMemo)(()=>"fullWidth"===f?"xs"===U?"leftSmRight":"left":"center"===f?"center":"left",[f,U]),K=(0,a.useMemo)(()=>"fullWidth"===f?"xs"===U?"leftSmRight":"left":"center"===f?"center":"left",[f,U]),Y=w?"":"dark"===q?"bg-black":"bg-white",J="fullWidth"===f?"flex flex-col sm:flex-row sm:justify-between sm:items-center gap-6 w-full":"left"===f?"grid grid-cols-1 justify-items-start gap-6":"grid grid-cols-1 sm:justify-items-center sm:text-center gap-6 w-full",Z="center"===f?"justify-self-center":"justify-self-start",ee=(0,a.useMemo)(()=>{let e="headline"===_?"heading":_;return`${e}-${U}`},[U,_]),et=(0,a.useMemo)(()=>e?(0,t.jsx)(u.default,{text:e,characterLength:100,rows:2,classNames:"!pb-0",children:(0,t.jsx)(s.default,{theme:q,variant:ee,tag:i??"h2",className:`${X} flex flex-wrap w-full normal-case`,children:e.split(" ").map((e,r)=>(0,t.jsx)("span",{className:"whitespace-nowrap",children:e},`${e}-${r}`))})}):null,[ee,e,X,i,q]),er=(0,a.useMemo)(()=>P&&"object"==typeof P&&"html"in P&&P.html?(0,t.jsx)("div",{children:(0,t.jsx)(c.default,{html:P.html,pVariant:"display"===_?`scripted-${"xl"===U?"lg":U}`:`paragraph-${"xl"===U?"lg":U}`,className:`inline ${"dark"===q?"text-action-color-secondary-on-dark":"text-action-color-secondary"}`})}):null,[P,_,U,q]);return(0,t.jsxs)("div",{className:`w-full ${Y} ${A} ${"center"===f?"grid w-full sm:justify-items-center sm:text-center":"grid"}`,"data-qa-id":C,"data-mode":q,children:[(0,t.jsxs)("div",{className:`w-full ${J}`,children:[(0,t.jsx)("div",{className:`${Z} ${"fullWidth"===f?"flex-1 min-w-0":""}`,children:(0,t.jsx)("div",{className:`w-full grid ${V?.grid} `,children:(0,t.jsxs)("div",{className:`flex flex-col ${"center"===f?V?.headerCenter:V?.header} ${"center"===f?"text-center":""} ${"large"===D?"gap-4":"gap-2"} sm:pr-6`,children:[g&&(0,t.jsx)(u.default,{text:g,characterLength:60,rows:1,children:(0,t.jsx)(s.default,{theme:q,variant:H,tag:"span",className:"!normal-case",children:g})}),(0,t.jsxs)("div",{className:`flex flex-col ${"large"===D?"gap-4":"gap-2"}`,children:[et,er]})]})})}),(E||x)&&(0,t.jsxs)("div",{className:`
    ${m({alignment:G,justify:z})}
    ${"fullWidth"===f?"w-full sm:w-fit ml-0 sm:ml-auto flex-shrink-0 flex-row":"w-full"}
  `,children:[E&&(B="sameTab"===L||"newTab"===L,(0,t.jsx)(o.default,{Tag:B?"a":"button",disabled:"none"===L,theme:q,"aria-labelledby":F||e,"data-qa-id":`${C}-${(0,r.transformWordToKebabCase)(E)}-button`,id:`${E}-button`,name:`${E}-button`,className:"w-full sm:!w-fit !m-0 whitespace-nowrap",href:B?O:null,onClick:B?void 0:j,tracking:M,children:(0,t.jsx)(u.default,{text:E,characterLength:60,rows:1,children:E})})),x&&(W="sameTab"===T||"newTab"===T,(0,t.jsx)("div",{className:p({textAlign:K}),children:(0,t.jsx)(l.ArrowLink,{Tag:W?"a":"button",variation:"primary",disabled:"none"===T,theme:q,href:W?v:null,rel:"newTab"===T?"noopener noreferrer":void 0,external:"newTab"===T,className:"!normal-case pl-0 whitespace-nowrap",ariaLabel:R,id:`${x}-icon`,onClick:W?void 0:N,"data-qa-id":`${C}-${(0,r.transformWordToKebabCase)(x)}-link`,tracking:Q,"data-tracking":JSON.stringify({URL:`${v}`,...S}),children:(0,t.jsx)(u.default,{text:x,characterLength:60,rows:1,children:x})})}))]})]}),b&&(0,t.jsx)("div",{className:"pt-8 w-full",children:(0,t.jsx)(n.Divider,{theme:y})})]})});f.displayName="ComponentHeader",e.s(["default",0,f],282060)},196033,e=>{"use strict";var t=e.i(282060);e.s(["ComponentHeader",()=>t.default])},582339,e=>{"use strict";var t=e.i(293769),r=e.i(611947),i=e.i(420896);e.s(["useBreakpoint",0,function(){let e,a,s=(0,t.c)(2),[n,l]=(0,i.useState)("BASE");return s[0]===Symbol.for("react.memo_cache_sentinel")?(e=()=>{let e=()=>{let e=window.innerWidth;e<r.BreakPointVariables.XS?l("BASE"):e>=r.BreakPointVariables.XS&&e<r.BreakPointVariables.SM?l("XS"):e>=r.BreakPointVariables.SM&&e<r.BreakPointVariables.MD?l("SM"):e>=r.BreakPointVariables.MD&&e<r.BreakPointVariables.LG?l("MD"):e>=r.BreakPointVariables.LG&&e<r.BreakPointVariables.XL?l("LG"):e>=r.BreakPointVariables.XL&&e<r.BreakPointVariables.XXL?l("XL"):l("XXL")};return e(),window.addEventListener("resize",e),()=>window.removeEventListener("resize",e)},a=[],s[0]=e,s[1]=a):(e=s[0],a=s[1]),(0,i.useEffect)(e,a),n}])},82413,e=>{"use strict";var t=e.i(901538),r=e.i(861117),i=e.i(47887),a=e.i(582339),s=e.i(519828),n=e.i(196033),l=e.i(464118),o=e.i(294237),c=e.i(264458),u=e.i(420896);let d=(0,o.cva)("grid grid-cols-12 w-full component [&.component_&]:p-0",{variants:{colorBackground:{base:"bg-background-base",primary:"bg-background-primary",secondary:"bg-background-secondary",light:"bg-background-100",dark:"bg-background-800",primaryLight:"bg-background-primary-light"},componentWidth:{fullBleed:"",pageWidth:"max-w-screen-xxl mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16",mediumWidth:"max-w-screen-xxl mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16"}},defaultVariants:{colorBackground:"base",componentWidth:"pageWidth"}}),h=(0,o.cva)("col-span-12",{variants:{componentWidth:{mediumWidth:"md:col-span-8 md:col-start-3",fullBleed:"",pageWidth:""}},defaultVariants:{componentWidth:"pageWidth"}}),m={1:"col-span-12 flex",2:"col-span-6 flex",3:"col-span-4 flex",4:"col-span-6 xl:col-span-3 flex"},p={responsive:"col-span-12 flex",2:"col-span-6 flex",3:"col-span-4 flex"},f={responsive:"col-span-12 flex",1:"col-span-12 flex",2:"col-span-6 flex"},y=(0,u.memo)(({headerDivider:e,contentDivider:r,gridComponents:i,colorBackground:a,desktopLayout:o,componentWidth:u,tabletLayout:y,mobileLayout:g,breakpoint:b,children:x,ctaQaId:v,onHandleButtonClick:T,isBottomButtonVisible:R,baseQaId:C,...S})=>{let w,k=S?.onDark?"dark":"light",I=`ComponentHeader-${(S?.headline||"")?.split(" ")?.join("-")}`,_=R&&S?.headerPosition==="center",$={...S,mode:k,divider:e,baseQaId:`${C}-ComponentHeader`,id:I,inheritBackground:!0,buttonLabel:_?void 0:S?.buttonLabel,buttonUrl:_?void 0:S?.buttonUrl,onHandleButtonClick:_?void 0:T};return(0,t.jsx)("div",{className:(0,c.default)(d({colorBackground:a,componentWidth:u})),"data-qa-id":C,children:(0,t.jsx)("div",{className:h({componentWidth:u}),children:(0,t.jsxs)("div",{className:"max-w-[var(--breakpoint-container-max-width)] mx-auto",children:[S?.headline&&(0,t.jsx)(n.ComponentHeader,{...$}),(0,t.jsx)("div",{className:`${r?"my-3":"md:gap-6 gap-8"}${S?.headline?" mt-8":""}`,children:(0,t.jsx)(l.Grid,{fullWidth:!0,className:(0,c.default)("grid grid-cols-12 max-w-screen-xxl mx-auto",{"xxs:divide-y sm:divide-y-0 divide-background-300 sm:gap-y-8 sm:gap-x-0 xxs:gap-x-0 xxs:gap-y-0":r,"xxs:gap-6 xs:gap-8 md:gap-6":!r}),children:(0,t.jsx)("ul",{className:"contents",children:i?.map((e,a)=>{let s=(a+1)%("SM"===b?"responsive"===y?1:Number.parseInt(y):"XS"===b||"BASE"===b?"responsive"===g?1:Number.parseInt(g):Number.parseInt(o))==0||a===i.length-1,n=e._path||`grid-item-${a}`;return(0,t.jsx)("li",{className:(0,c.default)("XS"===b||"BASE"===b?f[g]:"SM"===b?p[y]:m[o],{"sm:px-8 xxs:mx-4 sm:mx-0 xs:mx-6 sm:py-0 py-8":r,"border-r border-background-300":r&&!s}),children:"function"==typeof x?x(e,a):null},n)})})})}),R&&S?.buttonLabel&&S?.headerPosition==="center"&&(w=S?.buttonAction==="sameTab"||S?.buttonAction==="newTab",(0,t.jsx)("div",{className:"w-full flex justify-center items-center mt-10",children:(0,t.jsx)("div",{className:"w-full sm:w-fit",children:(0,t.jsx)(s.Button,{disabled:S?.buttonAction==="none",styleType:"solid",Tag:w?"a":"button",variant:"primary",theme:k,"aria-labelledby":S?.headline,href:w?S?.buttonUrl||"":void 0,target:S?.buttonAction==="newTab"?"_blank":"_self",rel:S?.buttonAction==="newTab"?"noopener noreferrer":void 0,className:"w-fit","data-tracking":JSON.stringify(S?.buttonTracking),"data-qa-id":v,onClick:T,children:S?.buttonLabel})})}))]})})})});y.displayName="GridContainer";var g=e.i(673678),b=e.i(119553),x=e.i(707691),v=e.i(100138),T=e.i(937588),R=e.i(864585),C=e.i(853721);let S=(0,u.memo)(e=>{let s=(0,i.useGenerateTestId)("GridContainer"),n=(0,a.useBreakpoint)(),l=(0,i.useWithParentRegion)(),{openPromotionModal:o,PromotionDetailsModal:c}=(0,x.usePromotionDetails)(),{gridComponents:d,headline:h,tireFinderParamsForCTA:m,ctaReferencePath:p,ctaAction:f,ctaLabel:S,ctaUrl:w,tireFinderParamsForButton:k,buttonReferencePath:I,buttonLabel:_,buttonAction:$,buttonUrl:F,onDark:E,desktopLayout:L,tracking:O}=e,M=(0,u.useMemo)(()=>r.COMPONENT_TYPES.GRID_CONTAINER,[]),Q=(0,u.useMemo)(()=>{let e=E?"dark":"light",t=`${L}col`,r=`${t}-${e}`;return(0,v.buildComponentName)(l,r)},[E,L,l]),P=(0,b.useClickWithTireFinderParams)({url:F,action:$??"none",pageReference:I,sendTireFinderParams:k,openPromotionModal:o}),j=(0,b.useClickWithTireFinderParams)({url:w,action:f??"none",pageReference:p,sendTireFinderParams:m,openPromotionModal:o}),N=(0,u.useMemo)(()=>{if(_)return(0,v.createLinkTracking)({name:(0,v.buildCTAName)(M,h||"",_),componentType:M,componentName:Q,url:F||"",componentElement:"link",isExternal:"newTab"===$,additionalData:{...O}})},[M,h,_,Q,F,$,O]),D=(0,u.useMemo)(()=>{if(S)return(0,v.createLinkTracking)({name:(0,v.buildCTAName)(M,h||"",S),componentType:M,componentName:Q,url:w||"",componentElement:"link",isExternal:"newTab"===f,additionalData:{...O}})},[S,M,Q,w,f,O,h]),A=(0,u.useMemo)(()=>!!d?.[0]&&d[0]?.__typename==="SmallStackedCardModel",[d]),B=(0,u.useMemo)(()=>({...e,baseQaId:s,breakpoint:n,ctaTracking:D,buttonTracking:N,isBottomButtonVisible:A,onHandleButtonClick:P,onHandleLinkClick:j}),[e,s,n,D,N,A,P,j]),W=(0,u.useCallback)((e,r)=>{if(!e?.__typename)return null;let a=(0,C.getComponentName)(e.__typename),n=(0,R.getComponentByID)(e.__typename);if(!n)return null;let l=(0,R.getEditableComponent)(e.__typename,n),o=`${a}-${r}`,c=(0,T.transformWordToKebabCase)(a),u={...e,..."CategoryCard"===a&&{width:"responsive"},..."DataDisplay"===a&&!e?.onDark&&{onDark:E},baseQaId:`${s}-${o}`};return(0,t.jsx)(i.RegionProvider,{prefix:c,componentName:c,children:(0,t.jsx)(l,{...u})},o)},[s,E]);return(0,t.jsxs)(t.Fragment,{children:[(0,t.jsx)(g.default,{children:(0,t.jsx)(y,{...B,children:(e,t)=>W(e,t)})}),c]})});S.displayName="GridContainer",e.s(["default",0,S],82413)}]);