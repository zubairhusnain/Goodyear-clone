(globalThis.TURBOPACK||(globalThis.TURBOPACK=[])).push(["object"==typeof document?document.currentScript:void 0,612024,e=>{"use strict";var t=e.i(998005);let r=`
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
`,s=`
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
`,a=`
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
`,o=`
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
`,l=`
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
`,u=`
  ... on FormSectionModel {
    _path
    __typename
    headline
    sectionFields {
      ${i}
      ${n}
      ${l}
      ${s}
      ${o}
      ${a}
    }
  }
`,d=`
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
            ${l}
            ${u}
            ${s}
            ${o}
            ${a}
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
`;var c=e.i(715351),m=e.i(855336);let h=async({brand:e,pageName:t,localeCountry:r,lob:i,region:s},a)=>(0,m.graphqlService)({query:d,variables:{brand:e,pageName:t,localeCountry:r,lob:i,region:s},extraHeaders:{usid:a}}),f=({brand:e,pageName:t,localeCountry:r,lob:i,region:s})=>(0,c.graphqlClientProxy)({moduleName:"formQueries",queryName:"executeFormsQuery",payload:{brand:e,pageName:t,localeCountry:r,lob:i,region:s}}),p=async(e,t,i={})=>(0,m.graphqlService)({query:r,variables:e,extraHeaders:{...t?{usid:t}:{},...i}}),y=e=>{let{csrfToken:t,...r}=e;return(0,c.graphqlClientProxy)({moduleName:"formQueries",queryName:"executeFormSubmissionMutation",payload:r,csrfToken:t,formId:e.formId})};e.s(["executeFormSubmissionMutation",0,p,"executeFormsQuery",0,h,"fetchFormContent",0,f,"fetchFormContentQuery",0,({brand:e,pageName:r,localeCountry:i,lob:s,region:a})=>(0,t.queryOptions)({queryKey:["fetch-form",r],queryFn:async()=>f({brand:e,pageName:r,localeCountry:i,lob:s,region:a})}),"submitForm",0,y,"submitFormMutation",0,()=>({mutationKey:["form-submission"],mutationFn:async e=>y(e)})],612024)},984003,e=>{"use strict";var t=e.i(610145),r=e.i(855336),i=e.i(998005),s=e.i(715351);let a=`
  query GetCountryStateList($region: String!, $country: [String!]) {
    getCountryStateList(region: $region, country: $country) {
      metadata {
        usid
      }
      errors {
        errorCode
        message
        path
        status
        details {
          message
          path
        }
      }
      data {
        item {
          country
          countryCode
          states {
            state
            stateCode
          }
        }
      }
    }
  }
`,n=async(e,t)=>(0,r.graphqlService)({query:a,variables:e,extraHeaders:{usid:t}});e.s(["executeCountryStateListQuery",0,n,"fetchCountryStateList",0,(e,r=!0,a)=>(0,i.queryOptions)({queryKey:["countryStateList"],enabled:r,queryFn:async()=>(0,s.graphqlClientProxy)({moduleName:"countryStateQueries",queryName:"executeCountryStateListQuery",payload:{region:e}}),...a?{initialData:a}:{},...t.QueryCache.countryStateList})])},254465,e=>{"use strict";var t=e.i(901538),r=e.i(293769),i=e.i(984003),s=e.i(214260),a=e.i(420896);let n=(0,a.createContext)(null),o=(0,a.memo)(e=>{let o,l,u,d,c,m=(0,r.c)(12),{children:h}=e,[f,p]=(0,a.useState)("");m[0]===Symbol.for("react.memo_cache_sentinel")?(o=e=>{p(e)},m[0]=o):o=m[0];let y=o;m[1]===Symbol.for("react.memo_cache_sentinel")?(l={...(0,i.fetchCountryStateList)("Americas",!0)},m[1]=l):l=m[1];let{data:g,isLoading:b,error:v}=(0,s.useQuery)(l);m[2]!==g?.getCountryStateList?.data?.item?(u=g?.getCountryStateList?.data?.item??[],m[2]=g?.getCountryStateList?.data?.item,m[3]=u):u=m[3];let F=u;m[4]!==v||m[5]!==b||m[6]!==F||m[7]!==f?(d={data:F,isLoading:b,error:v,setSelectCountry:y,selectCountry:f},m[4]=v,m[5]=b,m[6]=F,m[7]=f,m[8]=d):d=m[8];let T=d;return m[9]!==h||m[10]!==T?(c=(0,t.jsx)(n.Provider,{value:T,children:h}),m[9]=h,m[10]=T,m[11]=c):c=m[11],c});e.s(["CountryStateProvider",0,o,"useCountryState",0,()=>{let e=(0,a.useContext)(n);if(!e)throw Error("useCountryState must be used inside CountryStateProvider");return e}])},214260,e=>{"use strict";let t;var r=e.i(731074),i=e.i(749988),s=e.i(931541),a=e.i(126799),n=e.i(37655),o=e.i(644398),l=e.i(286954),u=e.i(664683),d=class extends n.Subscribable{constructor(e,t){super(),this.options=t,this.#e=e,this.#t=null,this.#r=(0,o.pendingThenable)(),this.bindMethods(),this.setOptions(t)}#e;#i=void 0;#s=void 0;#a=void 0;#n;#o;#r;#t;#l;#u;#d;#c;#m;#h;#f=new Set;bindMethods(){this.refetch=this.refetch.bind(this)}onSubscribe(){1===this.listeners.size&&(this.#i.addObserver(this),c(this.#i,this.options)?this.#p():this.updateResult(),this.#y())}onUnsubscribe(){this.hasListeners()||this.destroy()}shouldFetchOnReconnect(){return m(this.#i,this.options,this.options.refetchOnReconnect)}shouldFetchOnWindowFocus(){return m(this.#i,this.options,this.options.refetchOnWindowFocus)}destroy(){this.listeners=new Set,this.#g(),this.#b(),this.#i.removeObserver(this)}setOptions(e){let t=this.options,r=this.#i;if(this.options=this.#e.defaultQueryOptions(e),void 0!==this.options.enabled&&"boolean"!=typeof this.options.enabled&&"function"!=typeof this.options.enabled&&"boolean"!=typeof(0,l.resolveEnabled)(this.options.enabled,this.#i))throw Error("Expected enabled to be a boolean or a callback that returns a boolean");this.#v(),this.#i.setOptions(this.options),t._defaulted&&!(0,l.shallowEqualObjects)(this.options,t)&&this.#e.getQueryCache().notify({type:"observerOptionsUpdated",query:this.#i,observer:this});let i=this.hasListeners();i&&h(this.#i,r,this.options,t)&&this.#p(),this.updateResult(),i&&(this.#i!==r||(0,l.resolveEnabled)(this.options.enabled,this.#i)!==(0,l.resolveEnabled)(t.enabled,this.#i)||(0,l.resolveStaleTime)(this.options.staleTime,this.#i)!==(0,l.resolveStaleTime)(t.staleTime,this.#i))&&this.#F();let s=this.#T();i&&(this.#i!==r||(0,l.resolveEnabled)(this.options.enabled,this.#i)!==(0,l.resolveEnabled)(t.enabled,this.#i)||s!==this.#h)&&this.#x(s)}getOptimisticResult(e){var t,r;let i=this.#e.getQueryCache().build(this.#e,e),s=this.createResult(i,e);return t=this,r=s,(0,l.shallowEqualObjects)(t.getCurrentResult(),r)||(this.#a=s,this.#o=this.options,this.#n=this.#i.state),s}getCurrentResult(){return this.#a}trackResult(e,t){return new Proxy(e,{get:(e,r)=>(this.trackProp(r),t?.(r),"promise"===r&&(this.trackProp("data"),this.options.experimental_prefetchInRender||"pending"!==this.#r.status||this.#r.reject(Error("experimental_prefetchInRender feature flag is not enabled"))),Reflect.get(e,r))})}trackProp(e){this.#f.add(e)}getCurrentQuery(){return this.#i}refetch({...e}={}){return this.fetch({...e})}fetchOptimistic(e){let t=this.#e.defaultQueryOptions(e),r=this.#e.getQueryCache().build(this.#e,t);return r.fetch().then(()=>this.createResult(r,t))}fetch(e){return this.#p({...e,cancelRefetch:e.cancelRefetch??!0}).then(()=>(this.updateResult(),this.#a))}#p(e){this.#v();let t=this.#i.fetch(this.options,e);return e?.throwOnError||(t=t.catch(l.noop)),t}#F(){this.#g();let e=(0,l.resolveStaleTime)(this.options.staleTime,this.#i);if(i.environmentManager.isServer()||this.#a.isStale||!(0,l.isValidTimeout)(e))return;let t=(0,l.timeUntilStale)(this.#a.dataUpdatedAt,e);this.#c=u.timeoutManager.setTimeout(()=>{this.#a.isStale||this.updateResult()},t+1)}#T(){return("function"==typeof this.options.refetchInterval?this.options.refetchInterval(this.#i):this.options.refetchInterval)??!1}#x(e){this.#b(),this.#h=e,!i.environmentManager.isServer()&&!1!==(0,l.resolveEnabled)(this.options.enabled,this.#i)&&(0,l.isValidTimeout)(this.#h)&&0!==this.#h&&(this.#m=u.timeoutManager.setInterval(()=>{(this.options.refetchIntervalInBackground||r.focusManager.isFocused())&&this.#p()},this.#h))}#y(){this.#F(),this.#x(this.#T())}#g(){this.#c&&(u.timeoutManager.clearTimeout(this.#c),this.#c=void 0)}#b(){this.#m&&(u.timeoutManager.clearInterval(this.#m),this.#m=void 0)}createResult(e,t){let r,i=this.#i,s=this.options,n=this.#a,u=this.#n,d=this.#o,m=e!==i?e.state:this.#s,{state:p}=e,y={...p},g=!1;if(t._optimisticResults){let r=this.hasListeners(),n=!r&&c(e,t),o=r&&h(e,i,t,s);(n||o)&&(y={...y,...(0,a.fetchState)(p.data,e.options)}),"isRestoring"===t._optimisticResults&&(y.fetchStatus="idle")}let{error:b,errorUpdatedAt:v,status:F}=y;r=y.data;let T=!1;if(void 0!==t.placeholderData&&void 0===r&&"pending"===F){let e;n?.isPlaceholderData&&t.placeholderData===d?.placeholderData?(e=n.data,T=!0):e="function"==typeof t.placeholderData?t.placeholderData(this.#d?.state.data,this.#d):t.placeholderData,void 0!==e&&(F="success",r=(0,l.replaceData)(n?.data,e,t),g=!0)}if(t.select&&void 0!==r&&!T)if(n&&r===u?.data&&t.select===this.#l)r=this.#u;else try{this.#l=t.select,r=t.select(r),r=(0,l.replaceData)(n?.data,r,t),this.#u=r,this.#t=null}catch(e){this.#t=e}this.#t&&(b=this.#t,r=this.#u,v=Date.now(),F="error");let x="fetching"===y.fetchStatus,S="pending"===F,R="error"===F,C=S&&x,w=void 0!==r,I={status:F,fetchStatus:y.fetchStatus,isPending:S,isSuccess:"success"===F,isError:R,isInitialLoading:C,isLoading:C,data:r,dataUpdatedAt:y.dataUpdatedAt,error:b,errorUpdatedAt:v,failureCount:y.fetchFailureCount,failureReason:y.fetchFailureReason,errorUpdateCount:y.errorUpdateCount,isFetched:e.isFetched(),isFetchedAfterMount:y.dataUpdateCount>m.dataUpdateCount||y.errorUpdateCount>m.errorUpdateCount,isFetching:x,isRefetching:x&&!S,isLoadingError:R&&!w,isPaused:"paused"===y.fetchStatus,isPlaceholderData:g,isRefetchError:R&&w,isStale:f(e,t),refetch:this.refetch,promise:this.#r,isEnabled:!1!==(0,l.resolveEnabled)(t.enabled,e)};if(this.options.experimental_prefetchInRender){let t=void 0!==I.data,r="error"===I.status&&!t,s=e=>{r?e.reject(I.error):t&&e.resolve(I.data)},a=()=>{s(this.#r=I.promise=(0,o.pendingThenable)())},n=this.#r;switch(n.status){case"pending":e.queryHash===i.queryHash&&s(n);break;case"fulfilled":(r||I.data!==n.value)&&a();break;case"rejected":r&&I.error===n.reason||a()}}return I}updateResult(){let e=this.#a,t=this.createResult(this.#i,this.options);if(this.#n=this.#i.state,this.#o=this.options,void 0!==this.#n.data&&(this.#d=this.#i),(0,l.shallowEqualObjects)(t,e))return;this.#a=t;let r=()=>{if(!e)return!0;let{notifyOnChangeProps:t}=this.options,r="function"==typeof t?t():t;if("all"===r||!r&&!this.#f.size)return!0;let i=new Set(r??this.#f);return this.options.throwOnError&&i.add("error"),Object.keys(this.#a).some(t=>this.#a[t]!==e[t]&&i.has(t))};this.#S({listeners:r()})}#v(){let e=this.#e.getQueryCache().build(this.#e,this.options);if(e===this.#i)return;let t=this.#i;this.#i=e,this.#s=e.state,this.hasListeners()&&(t?.removeObserver(this),e.addObserver(this))}onQueryUpdate(){this.updateResult(),this.hasListeners()&&this.#y()}#S(e){s.notifyManager.batch(()=>{e.listeners&&this.listeners.forEach(e=>{e(this.#a)}),this.#e.getQueryCache().notify({query:this.#i,type:"observerResultsUpdated"})})}};function c(e,t){return!1!==(0,l.resolveEnabled)(t.enabled,e)&&void 0===e.state.data&&("error"!==e.state.status||!1!==t.retryOnMount)||void 0!==e.state.data&&m(e,t,t.refetchOnMount)}function m(e,t,r){if(!1!==(0,l.resolveEnabled)(t.enabled,e)&&"static"!==(0,l.resolveStaleTime)(t.staleTime,e)){let i="function"==typeof r?r(e):r;return"always"===i||!1!==i&&f(e,t)}return!1}function h(e,t,r,i){return(e!==t||!1===(0,l.resolveEnabled)(i.enabled,e))&&(!r.suspense||"error"!==e.state.status)&&f(e,r)}function f(e,t){return!1!==(0,l.resolveEnabled)(t.enabled,e)&&e.isStaleByTime((0,l.resolveStaleTime)(t.staleTime,e))}e.i(510857);var p=e.i(420896),y=e.i(395486);e.i(901538);var g=p.createContext((t=!1,{clearReset:()=>{t=!1},reset:()=>{t=!0},isReset:()=>t})),b=p.createContext(!1);b.Provider;var v=(e,t,r)=>t.fetchOptimistic(e).catch(()=>{r.clearReset()});e.s(["useQuery",0,function(e,t){return function(e,t,r){let a,n=p.useContext(b),o=p.useContext(g),u=(0,y.useQueryClient)(r),d=u.defaultQueryOptions(e);u.getDefaultOptions().queries?._experimental_beforeQuery?.(d);let c=u.getQueryCache().get(d.queryHash);if(d._optimisticResults=n?"isRestoring":"optimistic",d.suspense){let e=e=>"static"===e?e:Math.max(e??1e3,1e3),t=d.staleTime;d.staleTime="function"==typeof t?(...r)=>e(t(...r)):e(t),"number"==typeof d.gcTime&&(d.gcTime=Math.max(d.gcTime,1e3))}a=c?.state.error&&"function"==typeof d.throwOnError?(0,l.shouldThrowError)(d.throwOnError,[c.state.error,c]):d.throwOnError,(d.suspense||d.experimental_prefetchInRender||a)&&!o.isReset()&&(d.retryOnMount=!1),p.useEffect(()=>{o.clearReset()},[o]);let m=!u.getQueryCache().get(d.queryHash),[h]=p.useState(()=>new t(u,d)),f=h.getOptimisticResult(d),F=!n&&!1!==e.subscribed;if(p.useSyncExternalStore(p.useCallback(e=>{let t=F?h.subscribe(s.notifyManager.batchCalls(e)):l.noop;return h.updateResult(),t},[h,F]),()=>h.getCurrentResult(),()=>h.getCurrentResult()),p.useEffect(()=>{h.setOptions(d)},[d,h]),d?.suspense&&f.isPending)throw v(d,h,o);if((({result:e,errorResetBoundary:t,throwOnError:r,query:i,suspense:s})=>e.isError&&!t.isReset()&&!e.isFetching&&i&&(s&&void 0===e.data||(0,l.shouldThrowError)(r,[e.error,i])))({result:f,errorResetBoundary:o,throwOnError:d.throwOnError,query:c,suspense:d.suspense}))throw f.error;if(u.getDefaultOptions().queries?._experimental_afterQuery?.(d,f),d.experimental_prefetchInRender&&!i.environmentManager.isServer()&&f.isLoading&&f.isFetching&&!n){let e=m?v(d,h,o):c?.promise;e?.catch(l.noop).finally(()=>{h.updateResult()})}return d.notifyOnChangeProps?f:h.trackResult(f)}(e,d,t)}],214260)},794250,e=>{"use strict";var t=e.i(998005),r=e.i(610145);let i=`
  query getCsrfToken($formId: String!) {
    getCsrfToken(formId: $formId) {
      data {
        message
        formId
        token
      }
      errors {
        status
        message
        errorCode
        path
      }
      metadata {
        usid
      }
    }
  }
`;var s=e.i(715351),a=e.i(855336);let n=async(e,t)=>(0,a.graphqlService)({query:i,variables:e,extraHeaders:{usid:t}});e.s(["executeGetCsrfToken",0,n,"fetchCsrfTokenQuery",0,e=>(0,t.queryOptions)({queryKey:["csrfToken",e],queryFn:async()=>(0,s.graphqlClientProxy)({moduleName:"csrfQueries",queryName:"executeGetCsrfToken",payload:{formId:e}}),...r.QueryCache.csrfToken,enabled:!!e}),"getCsrfToken",0,e=>(0,s.graphqlClientProxy)({moduleName:"csrfQueries",queryName:"executeGetCsrfToken",payload:e})],794250)},616799,e=>{"use strict";var t=e.i(293769),r=e.i(794250),i=e.i(214260);e.s(["useCsrfToken",0,e=>{let s,a,n,o=(0,t.c)(11);o[0]!==e?(s=(0,r.fetchCsrfTokenQuery)(e),o[0]=e,o[1]=s):s=o[1];let l=s;o[2]!==l?(a={...l,retry:2,throwOnError:!1},o[2]=l,o[3]=a):a=o[3];let{data:u,isLoading:d,isError:c,error:m,refetch:h}=(0,i.useQuery)(a),f=u?.getCsrfToken?.data,p=f?.token??null,y=f?.formId??null;return o[4]!==c||o[5]!==d||o[6]!==h||o[7]!==p||o[8]!==y||o[9]!==m?(n={csrfToken:p,formId:y,isLoading:d,isError:c,error:m,refetch:h},o[4]=c,o[5]=d,o[6]=h,o[7]=p,o[8]=y,o[9]=m,o[10]=n):n=o[10],n}])},541626,605777,e=>{"use strict";e.i(510857);var t=e.i(901538),r=e.i(293769),i=e.i(687466),s=e.i(254465),a=e.i(301100),n=e.i(277030),o=e.i(47887),l=e.i(952462),u=e.i(932081);function d(e){if(!e)return"";let[t,r,i]=e.split("-");return`${r}/${i}/${t}`}function c(e,t,r){let i=[];for(let s of t)if(!s.isGroup){let t=e[s.name];t&&/date/i.test(s.type)&&(t=d(String(t)));let a={value:void 0!==t?String(t):"false"};r?(a.label=s.name,a.type=s.type):(a.name=s.name,a.validationType=s.type),(void 0!==t||"checkbox"===s.type)&&i.push(a)}for(let s of t.filter(e=>!0===e.isGroup)){let t=e[s.name];if(Array.isArray(t))for(let[e,a]of t.entries())for(let t of s.groupFields){let s=t.name;for(;s.length>0&&/\d/.test(s[s.length-1]);)s=s.slice(0,-1);let n=`${s}${e+1}`,o=a[t.name];if(o&&/date/i.test(t.type)&&(o=d(String(o))),void 0!==o){let e={value:String(o)};r?(e.label=n,e.type=t.type):(e.name=n,e.validationType=t.type),i.push(e)}}}return i}var m=e.i(937588),h=e.i(513283),h=h,f=e.i(99346),p=e.i(557415),y=e.i(612024),g=e.i(611947),b=e.i(779274),v=e.i(519828),F=e.i(464118),T=e.i(371981),x=e.i(216595),S=e.i(17404),R=e.i(616799),C=e.i(420896),w=e.i(908577);let I=(0,b.createLogger)("useTurnstile");function E(e={}){let{enabled:t=!0,appearance:r="execute",theme:i="auto",size:s="normal"}=e,[a,n]=(0,C.useState)(!1),[o,l]=(0,C.useState)(null),u=(0,C.useRef)(null),d=(0,C.useRef)(null),c=(0,w.getTurnstileSiteKey)();return(0,C.useEffect)(()=>{if(!t||!c)return;let e="turnstile-script";if(document.getElementById(e))return;let r=document.createElement("script");r.id=e,r.src=g.TURNSTILE_SCRIPT_URL,r.async=!0,r.defer=!0,document.head.appendChild(r)},[t,c]),(0,C.useEffect)(()=>{if(!t||!c)return;let e={current:!1},a=(t,r,i,s)=>{let a=Date.now();return new Promise((n,o)=>{let l=()=>{if(e.current)return void o(Error("Component unmounted"));let u=t();null!=u?n(u):Date.now()-a>=r?o(Error(s)):setTimeout(l,i)};l()})};return(async()=>{try{let[,t]=await Promise.all([((e=1e4)=>a(()=>!!(0,w.isTurnstileReady)()||null,e,100,`Turnstile script failed to load within ${e}ms`))(),((e=2e3)=>a(()=>d.current,e,50,`Container ref not available within ${e}ms`))()]);if(e.current)return;u.current=window.turnstile.render(t,{sitekey:c,theme:i,size:s,appearance:r,callback:e=>{(0,w.setGlobalTurnstileToken)(e),n(!0),l(null),I.info("Turnstile token generated",{appearance:r})},"error-callback":e=>{l(e),n(!1),(0,w.clearGlobalTurnstileToken)(),I.error("Turnstile error",{error:e})},"expired-callback":()=>{n(!1),(0,w.clearGlobalTurnstileToken)(),I.warn("Turnstile token expired")}})}catch(t){if(!e.current){let e=t instanceof Error?t.message:String(t);I.error("Failed to initialize Turnstile",{error:e,siteKey:c?"present":"missing",containerAvailable:!!d.current,turnstileReady:(0,w.isTurnstileReady)()}),l(e||"Failed to load security verification")}}})(),()=>{if(e.current=!0,null!==u.current&&(0,w.isTurnstileReady)())try{window.turnstile.remove(u.current)}catch(e){I.error("Failed to remove Turnstile widget",{error:e})}}},[t,c,i,s,r]),{isTokenReady:a,turnstileError:o,resetTurnstile:()=>{if(null!==u.current&&(0,w.isTurnstileReady)())try{window.turnstile.reset(u.current),n(!1),(0,w.clearGlobalTurnstileToken)(),l(null)}catch(e){I.error("Failed to reset Turnstile",{error:e})}},containerRef:d}}e.s(["useTurnstile",0,E],605777);var M=e.i(940434),_=e.i(793217),k=e.i(274844),q=e.i(861117),Q=e.i(18670),P=e.i(100138);let $={full:"col-span-12",half:"col-span-12 sm:col-span-6","one-third":"col-span-12 sm:col-span-4","one-fourth":"col-span-12 sm:col-span-3","two-third":"col-span-12 sm:col-span-8","three-fourth":"col-span-12 sm:col-span-9"},A=e=>{setTimeout(()=>{let t=document.querySelector(`[name="${e}"]`);t&&(t.dispatchEvent(new Event("input",{bubbles:!0})),t.dispatchEvent(new Event("change",{bubbles:!0})))},0)},O=e=>{let t={};for(let r of e)if("FormTextModel"===r.__typename||"FormSelectionModel"===r.__typename){let e=r.type;e&&(t[e]=r.name)}return t},L=e=>e.address?{addressFieldName:e.address,cityFieldName:e.city,stateFieldName:e.stateDropdown,zipFieldName:e.zipCode,countryFieldName:e.countryDropdown}:null,N=e=>"FormGroupModel"===e.__typename&&e.formGroupFields?e.formGroupFields:"FormTextModel"===e.__typename||"FormSelectionModel"===e.__typename?[e]:[],D=({headline:e,description:d,id:w,formId:I,formName:E,submitType:D,apiId:j,submitButtonText:G,submitButtonElement:U,thankYouMessage:V,formContainerComponents:B,customClassNames:W,submitHandler:z,onSuccess:K,onError:H,initialValues:Y,secondaryButtons:J=null,customGlobalError:X,showInitialLoader:Z=!0,setExternalGlobalError:ee,componentWidth:et="pageWidth",customFieldErrors:er,showTurnstile:ei=!0,turnstileAppearance:es="execute",requireTurnstileToken:ea=!1,isTokenReady:en,resetTurnstile:eo,ignoreUserDataForForm:el,dailyLimitCheck:eu,errorMessageForDailyLimit:ed,hideFields:ec,showArrowLink:em,formType:eh="flyout",analyticsFormType:ef,brand:ep,locale_country:ey,lob:eg,onDark:eb=!1,additionalAnalyticsData:ev={},componentName:eF,headingTag:eT,formStep:ex="",formCompletionStatus:eS,shouldNotTriggerFocus:eR,isEditMode:eC,editModeTracking:ew,onFormStartFired:eI,richTextTracking:eE,preSubmitContent:eM})=>{let e_,ek,eq,eQ=I||w||"",[eP,e$]=(0,C.useState)(null),eA=(0,n.useI18n)(g.i18nModels.FORM),{customerData:eO}=(0,a.useCustomerContext)(),{data:eL}=(0,s.useCountryState)(),eN=eO?.getCustomerData?.data,eD=(0,l.useSitePreferences)(),{mutateAsync:ej,isPending:eG}=((ek=(0,r.c)(1))[0]===Symbol.for("react.memo_cache_sentinel")?(e_=(0,y.submitFormMutation)(),ek[0]=e_):e_=ek[0],(0,p.useMutation)(e_)),{csrfToken:eU,refetch:eV}=(0,R.useCsrfToken)(eQ),eB=(0,o.useGenerateTestId)(E),eW=eD.getPreferences("formValidationRules"),ez=eD.getPreferences("googleAPIKey"),eK=(0,o.useWithParentRegion)(),eH=(0,C.useMemo)(()=>(0,m.convertKebabKeysToCamelCaseKeys)(eW),[eW]),eY=(0,C.useMemo)(()=>eH?.map(({id:e,maxlength:t})=>({id:e,maxlength:t})),[eH]),eJ=(0,C.useMemo)(()=>{let e;return e=(eY??[]).reduce((e,t)=>(t.id&&void 0!==t.maxlength&&null!==t.maxlength&&(e[t.id]=t.maxlength),e),{}),function t(r){return Array.isArray(r)?r?.map(t):(r&&"object"==typeof r&&(r.type&&Object.prototype.hasOwnProperty.call(e,r.type)&&(r.maxCharacterLength=e[r.type]),r.sectionFields&&(r.sectionFields=t(r.sectionFields)),r.formGroupFields&&(r.formGroupFields=t(r.formGroupFields))),r)}(B)},[eY,B]),{formSections:eX,flattenFormFields:eZ}=(0,C.useMemo)(()=>(function(e){if(!Array.isArray(e))return{formSections:[],flattenFormFields:[]};let t=e=>({...e,name:e.name,type:e.type??"text",isGroup:!1,value:""}),r=[],i=[];return e.forEach(e=>{if(e&&"object"==typeof e){if("FormSectionModel"===e.__typename&&Array.isArray(e.sectionFields)){e.headline&&r.push(e.headline),e.sectionFields.forEach(e=>{if(e&&"object"==typeof e){if("FormGroupModel"===e.__typename&&Array.isArray(e.formGroupFields))return void i.push({type:"group",name:`groups-${e.formGroupFields[0].name}`,isGroup:!0,groupFields:e.formGroupFields.map(t),maxCount:e.maxCount,enableMultiple:e.enableMultiple,buttonText:e.buttonText,buttonId:e.buttonId});i.push(t(e))}});return}if("FormGroupModel"===e.__typename&&Array.isArray(e.formGroupFields))return void i.push({type:"group",name:`groups-${e.formGroupFields[0].name}`,isGroup:!0,groupFields:e.formGroupFields.map(t),maxCount:e.maxCount,enableMultiple:e.enableMultiple,buttonText:e.buttonText,buttonId:e.buttonId});i.push(t(e))}}),{formSections:r,flattenFormFields:i}})(eJ),[eJ]),e0=function(e=[],t){let r,i,s,a,n={};return t.forEach(t=>{if(t.isGroup&&t.groupFields){let r=t.groupFields.some(e=>"address"===e.type),i=function(t,r=!1){let i={};return t.forEach(t=>{if("FormOptInCheckboxModel"===t.__typename){let r=e?.find(e=>e.id===t.type),s=h.boolean();t.isRequired&&(s=s.refine(e=>!0===e,{message:r?.dataMsgRequired||"This field is required"})),i[t.name]=s;return}let s=e?.find(e=>e.id===t.type);if(!s)return;let a=h.string();if(t.isRequired&&!(r&&"address"===t.type)&&(a=a.min(1,s.dataMsgRequired||"is required")),null!=s.minlength){let e=s.minlength;a=r&&"address"===t.type?a.refine(t=>!t||""===t.trim()||t.length>=e,{message:s.dataMsgMinlength??`Minimum ${e} characters`}):a.min(e,s.dataMsgMinlength??`Minimum ${e} characters`)}if(null!=s.maxlength&&(a=a.max(s.maxlength,s.dataMsgMaxlength??`Maximum ${s.maxlength} characters`)),s.dataMsgEmail&&(a=a.refine(e=>!e||0===e.length||e.includes("@"),{message:s.dataMsgEmail})),s.pattern){let e=s.pattern;try{a=r&&"address"===t.type?a.refine(t=>!t||""===t.trim()||new RegExp(e).test(t),{message:s.dataMsgPattern??"Please enter a valid value"}):a.regex(new RegExp(e),s.dataMsgPattern??"Please enter a valid value")}catch{}}i[t.name]=h.preprocess(e=>null==e?"":e,a)}),h.object(i)}(t.groupFields,r);r?n[t.name]=h.array(i).max(t.maxCount??6).superRefine((r,i)=>{r.forEach((r,s)=>{t.groupFields?.forEach(t=>{if("address"===t.type&&t.isRequired){let a=e?.find(e=>e.id===t.type),n=r[t.name],o="string"==typeof n?n:String(n||"");0!==s||o&&""!==o.trim()||i.addIssue({code:h.ZodIssueCode.custom,message:a?.dataMsgRequired||"is required",path:[s,t.name]})}})})}):n[t.name]=h.array(i).max(t.maxCount??6)}else{if("FormOptInCheckboxModel"===t.__typename){let r=e?.find(e=>e.id===t.type),i=h.boolean();t.isRequired&&(i=i.refine(e=>!0===e,{message:r?.dataMsgRequired||"This field is required"})),n[t.name]=i;return}let r=e?.find(e=>e.id===t.type);if(!r)return;if("FormDateModel"===t.__typename){let e=h.string();if(t.isRequired&&(e=e.min(1,r.dataMsgRequired||"This field is required")),(t.validFromYearsAgo||t.validTillYears)&&(e=e.refine(e=>(0,m.isValidDate)(e,t.validFromYearsAgo,t.validTillYears),{message:r.dataMsgPattern??"Please enter a valid date"})),r.pattern)try{e=e.regex(new RegExp(r.pattern),r.dataMsgPattern??"Please enter a valid value")}catch{}n[t.name]=e;return}let i=h.string();if(t.isRequired&&(i=i.min(1,r.dataMsgRequired||"is required")),null!=r.minlength&&(i=i.min(r.minlength,r.dataMsgMinlength??`Minimum ${r.minlength} characters`)),null!=r.maxlength&&(i=i.max(r.maxlength,r.dataMsgMaxlength??`Maximum ${r.maxlength} characters`)),r.dataMsgEmail&&(i=i.refine(e=>!e||0===e.length||e.includes("@"),{message:r.dataMsgEmail})),r.pattern)try{i=i.regex(new RegExp(r.pattern),r.dataMsgPattern??"Please enter a valid value")}catch{}n[t.name]=h.preprocess(e=>null==e?"":e,i)}}),h.object(n).refine(e=>{let r=t.filter(e=>(0,m.safeLower)(e.type).includes("password")||(0,m.safeLower)(e.name).includes("password")),i=t.find(e=>(0,m.safeLower)(e.type).includes("confirm")||(0,m.safeLower)(e.name).includes("confirm")),s=(()=>{if(0===r.length)return;if(1===r.length)return r[0];let e=r.map(e=>{let t=(0,m.safeLower)(e.name||""),r=(0,m.safeLower)(e.type||""),i=0;(t.includes("new")||r.includes("new"))&&(i+=100),(t.includes("current")||r.includes("current"))&&(i-=50),(t.includes("password")||r.includes("password"))&&(i+=5);let s=(e.name||"").length;return{field:e,score:i,tieBreaker:s}});return e.sort((e,t)=>{if(t.score!==e.score)return t.score-e.score;if(e.tieBreaker!==t.tieBreaker)return e.tieBreaker-t.tieBreaker;let r=(e.field.name||"").localeCompare(t.field.name||"");return 0!==r?r:(e.field.type||"").localeCompare(t.field.type||"")}),e[0].field})();if(!s||!i)return!0;let a=e[s.name]??"",n=e[i.name]??"";return""===a||""===n||a===n},{message:(r=e.find(e=>(0,m.safeLower)(e.id).includes("confirm"))??e.find(e=>"confirmPassword"===e.id),i=t.some(e=>(0,m.safeLower)(e.type).includes("current")||(0,m.safeLower)(e.name).includes("current")),s=t.some(e=>(0,m.safeLower)(e.type).includes("new")||(0,m.safeLower)(e.name).includes("new")),i&&s?r?.dataMsgEqualTo??"Confirm New Password does not match":r?.dataMsgEqualTo??"Passwords do not match, please try again"),path:(a=t.find(e=>(0,m.safeLower)(e.type).includes("confirm")||(0,m.safeLower)(e.name).includes("confirm"))??void 0,a?.name?[a.name]:[])})}(eH,eZ),e1=el?null:function(e={},t=[],r){let i={},s=e?.addresses,a=Array.isArray(s)&&s.find(e=>e?.preferred)||{},n=a?.countryCode?.toLowerCase()??"",o=a?.stateCode?.toLowerCase()??"",l=Array.isArray(r)?r.find(e=>(e?.countryCode?.toLowerCase()??"")===n):void 0,u=l?.country&&Array.isArray(l.states)?l.states.find(e=>(e.state?.toLowerCase()??"")===o):void 0,d={firstName:e?.firstName,lastName:e?.lastName,email:e?.login,phoneNumber:e?.phoneHome,address:a?.address1,city:a?.city,zipCode:a?.postalCode,countryDropdown:l?.country,stateDropdown:u?.state};function c(e){let t=e.type;t in d&&(i[e.name]=d[t]??"")}let m=Array.isArray(t)?t:Object.values(t);return m.length&&m.forEach(e=>{e.isGroup&&e.groupFields?.length?e.groupFields.forEach(e=>c(e)):c(e)}),i}(eN,eZ,eL),e5=(0,C.useMemo)(()=>(0,Q.buildDefaultValues)(e0,eZ,!0,Y??e1),[e0,eZ,Y]),e9=(0,C.useRef)({}),e4=(0,k.useForm)({mode:"onBlur",reValidateMode:"onChange",resolver:(eq=(0,u.zodResolver)(e0),async(e,t,r)=>{let i=await eq(e,t,r);for(let[t,r]of Object.entries(e9.current))(e[t]||"")===r.value?i.errors[t]||(i.errors[t]={type:"server",message:r.message}):delete e9.current[t];return i}),defaultValues:{...e5,...Y}}),e6=(0,C.useMemo)(()=>{let e=Object.keys(e5);return e.length>0?e:eZ.map(e=>e?.label??e?.name??e?.type).filter(Boolean)},[e5,eZ]),e2={formName:E,formVersion:q.FORM_VERSION,formType:ef??eh,formStep:ex||E,fieldLabels:e6,trackStepCompleteOnce:eS===q.STEP_TYPE.STEP_COMPLETE},e3=(0,f.useFormAnalytics)(e2),{handleSubmit:e7,control:e8,watch:te,reset:tt,formState:{errors:tr,isSubmitted:ti},unregister:ts,setValue:ta,setError:tn,setFocus:to}=e4,tl=(0,C.useRef)(Y);(0,C.useEffect)(()=>{Y&&Y!==tl.current&&(tl.current=Y,tt((0,Q.buildDefaultValues)(e0,eZ,!0,Y)))},[Y,tt,e0,eZ]);let tu=(0,C.useRef)(!1),[td,tc]=(0,C.useState)(!1),[tm,th]=(0,C.useState)("");(0,C.useEffect)(()=>{ee&&ee(tm)},[tm,ee]),(0,C.useEffect)(()=>{if(er)for(let[e,t]of Object.entries(er))tn(e,{type:t.type,message:t.message})},[er,tn]);let tf=(0,C.useRef)((0,Q.generateUUID)()),tp=(0,C.useRef)(null),ty=(0,C.useRef)(null),tg=(0,C.useMemo)(()=>{let e=[],t=B??[];if(t.some(e=>"FormSectionModel"===e.__typename)){for(let r of t)if("FormSectionModel"===r.__typename&&r.sectionFields){let t=L(O(r.sectionFields.flatMap(N)));t&&e.push(t)}}else{let r=L(O(t.flatMap(N)));r&&e.push(r)}return e},[B]),tb=e=>t=>{t.country&&e.countryFieldName&&ta(e.countryFieldName,t.country,{shouldValidate:!0,shouldDirty:!0}),t.city&&e.cityFieldName&&setTimeout(()=>{ta(e.cityFieldName,t.city,{shouldValidate:!0,shouldDirty:!0,shouldTouch:!0}),A(e.cityFieldName)},100),t.state&&e.stateFieldName&&setTimeout(()=>{ta(e.stateFieldName,t.state,{shouldValidate:!0,shouldDirty:!0,shouldTouch:!0}),A(e.stateFieldName)},100),e.zipFieldName&&setTimeout(()=>{ta(e.zipFieldName,t.zipCode||"",{shouldValidate:!0,shouldDirty:!0}),A(e.zipFieldName)},100)},tv=(0,C.useMemo)(()=>{let e={};for(let t of tg)e[t.addressFieldName]=tb(t);return e},[tg,ta]),tF=e=>{setTimeout(()=>{to(e),requestAnimationFrame(()=>{let t=document.activeElement,r=document.querySelector(`[name="${e}"]`);r&&t!==r?(r.focus(),r.scrollIntoView({behavior:"smooth",block:"center"}),b.default.debug("Focused via DOM fallback",{field:e})):r?(r.scrollIntoView({behavior:"smooth",block:"center"}),b.default.debug("Focused via setFocus",{field:e})):b.default.debug("Could not find field element",{field:e})})},100)},tT=async e=>{if((0,Q.isAllEmptyValues)(e))return th(eA("globalError"));let t=await (0,m.checkSubmissionLock)(eQ,e.Email);if(eu&&ed&&t){th(ed),e3&&e3?.setFormError(ed,(0,P.buildFormAnalyticsPayload)({formName:E,parentRegion:eK,componentName:eF,additionalAnalyticsData:ev,ctaSuffix:G}));return}let r=c(e,eZ,!1),s=c(e,eZ,!0);!function(e,t){let r=e.find(e=>"checkbox"===e.type);if(!r)return;(r.description?.html??r.label??"").replace(/<[^<>]*>/g,"").trim();let i=t.find(e=>e.name===r.name);r.name,i&&i.value,r.isRequired}(eZ,r);let a=(0,Q.replaceTemplateValues)(r,V?.description);e$({...V,description:{html:a}}),th("");try{if(z){let t=await z({formId:eQ,formName:E,formSubmissionId:tf.current,submitType:D,formData:r,targetInfo:{targetId:j??""},csrfToken:eU??void 0});if(!t||"object"==typeof t&&!t?.status){b.default.error("Custom submitHandler did not process the form successfully",{ok:!1});let r="object"==typeof t?t?.fieldErrors:void 0;if(r&&r.length>0){for(let t of(b.default.debug("Applying field errors",{fieldErrors:r}),r)){let r=e[t.name]||"";e9.current[t.name]={message:t.error,value:r},tn(t.name,{type:"manual",message:t.error})}let i=r[0].name;tF(i);let s="object"==typeof t?t?.globalError:void 0;s&&th(s)}else{let e="object"==typeof t?t?.globalError:void 0;th(e??X??"")}return H?.("Custom submit handler returned false"),e3&&e3?.setFormError("Custom submit handler failed",(0,P.buildFormAnalyticsPayload)({formName:E,parentRegion:eK,componentName:eF,additionalAnalyticsData:ev,ctaSuffix:G})),ei&&eo&&(eo(),b.default.info("Turnstile reset after failed submission")),{status:"error",error:"Custom submit handler returned false"}}return b.default.info("Form submitted successfully via custom submitHandler"),await (0,m.setSubmissionLock)(eQ,e.Email),e3&&eS&&e3?.updateFormStatus(eS,(0,P.buildFormAnalyticsPayload)({formName:E,parentRegion:eK,componentName:eF,status:eS,additionalAnalyticsData:ev,ctaSuffix:G})),tt(),K?.(),{status:"success",submissionId:void 0}}let t=await ej({formId:eQ,formName:E,formRequestId:tf.current,submitType:D,formType:eh,formData:s,sourceData:{domain:window.location.host||"https://www.goodyear.com",brand:ep||i.defaultBrand,lob:eg||i.defaultLob,locale:(0,m.formatLocale)(ey)},promotionsInfo:{onlinePromotion:"",campaignName:"",description:"",couponCode:"",sendEmailUsers:""},emailRegistrationInfo:{sourceCode:"",sourceType:"",adobeId:"",mti:""},csrfToken:eU??void 0}),a=t?.formSubmission?.data?.item?.correlationId;if(a)return b.default.info(t?.formSubmission?.data?.item?.message,t),await (0,m.setSubmissionLock)(eQ,e.Email),e3&&e3.updateFormStatus("complete",(0,P.buildFormAnalyticsPayload)({formName:E,parentRegion:eK,componentName:eF,status:"complete",additionalAnalyticsData:ev,ctaSuffix:G})),tc(!0),tt(),K?.(),{status:"success",submissionId:a};return th(eA("globalError")),H?.("Invalid form submission response"),{status:"error",error:"Invalid form submission response"}}catch(e){return b.default.error("Error fetching on form submission",{error:e}),e3&&e3?.setFormError(e.message||"Submission failed",(0,P.buildFormAnalyticsPayload)({formName:E,parentRegion:eK,componentName:eF,additionalAnalyticsData:ev})),th(e?.status===403?eA("securityVerificationError"):e?.status===500?e?.message:eA("globalError")),H?.(e?.message),ei&&eo&&(eo(),b.default.info("Turnstile reset after submission error")),{status:"error",error:e.message||"Error fetching on form submissions",statusCode:e.status||500}}finally{eV()}},tx=!!eS&&(eC??e3?.isResubmit??!1),tS=B?.length>0&&"FormSectionModel"===B[0].__typename;return(0,t.jsx)(C.Suspense,{fallback:Z&&(0,t.jsx)(T.Loader,{size:"lg",visible:!0}),children:(0,t.jsx)(_.APIProvider,{apiKey:ez,children:(0,t.jsxs)(o.RegionProvider,{prefix:E,componentId:"form",componentName:E,children:[eG&&(0,t.jsx)(T.Loader,{size:"lg",loaderBackgroundOverlay:"rgba(0, 0, 0, 0.3)",visible:!0}),(0,t.jsx)("div",{className:W?.grid??(0,M.authorableOuterGrid)({componentWidth:et}),children:(0,t.jsx)("div",{className:(0,M.componentWidthVariants)({componentWidth:et}),children:(0,t.jsx)(F.Grid,{id:"grid",fullWidth:!0,className:(0,m.cn)("max-w-[var(--breakpoint-container-max-width)] mx-auto",W?.grid??"w-full py-8"),children:td?eP&&(0,Q.renderThankYou)(eP):(0,t.jsx)(k.FormProvider,{...e4,children:(0,t.jsxs)("form",{ref:tp,onFocus:e=>{eR||tx||(e=>{if(tu.current)return;let t=e.target;["INPUT","TEXTAREA","SELECT"].includes(t.tagName)&&(e3&&e3?.updateFormStatus("start",(0,P.buildFormAnalyticsPayload)({formName:E,parentRegion:eK,componentName:eF,ctaSuffix:t?.id||"",additionalAnalyticsData:ev})),eI?.()),tu.current=!0})(e)},onSubmit:e7(tT,e=>{let{errorSections:t,validationErrors:r}=function(e,t){let r=new Set,i=[],s=(e,s)=>{let a=null,n=null;for(let i of t)if(a=function e(t,r){if(!t)return null;for(let i of t){if("name"in i&&(i.name===r||r.match(RegExp(`^${i.name}\\d+$`))))return i.name;if("sectionFields"in i&&Array.isArray(i.sectionFields)){let t=e(i.sectionFields,r);if(t)return t}if("formGroupFields"in i&&Array.isArray(i.formGroupFields)){let t=e(i.formGroupFields,r);if(t)return`groups-${t}.0.${t}`}}return null}("sectionFields"in i?i.sectionFields:[i],e)){"headline"in i&&i.headline&&r.add(i.headline),n=i;break}a?(n&&r.add(n.headline),i.push({field:a,type:(0,m.convertSnakeToCamelCase)(s.type),message:(0,m.formatErrorMessage)(a.label,s.message),code:""})):i.push({field:e,type:(0,m.convertSnakeToCamelCase)(s.type),message:s.message,code:""})};for(let[t,r]of Object.entries(e))t.startsWith("groups")&&Array.isArray(r)?r.forEach((e,t)=>{for(let[r,i]of Object.entries(e)){let e=r;for(;e.length>0&&/\d/.test(e[e.length-1]);)e=e.slice(0,-1);s(`${e}${t+1}`,i)}}):Array.isArray(r)||s(t,r);return{errorSections:Array.from(r),validationErrors:i}}(e,B);if(e3&&e3?.updateFormStatus("error",(0,P.buildFormAnalyticsPayload)({formName:E,parentRegion:eK,componentName:eF,status:"error",ctaSuffix:G,fieldErrors:r.map(e=>({type:"validation",message:e.message,name:e.field})),errorCount:r.length,errorFields:r.map(e=>e.field),additionalAnalyticsData:ev})),r.length)return tF(r[0].field),th(eA("globalError"));th("")}),noValidate:!0,id:eQ,name:E,className:W?.form??"flex flex-col gap-4","data-qa-id":E,children:[(e||d)&&(0,t.jsxs)("div",{className:"flex flex-col gap-4",children:[e&&(0,t.jsx)(S.Text,{tag:eT??"h1",variant:"heading-md",children:e}),(0,Q.renderDescription)(d)]}),ti&&tm?.length>0&&!ee&&(0,t.jsx)("div",{ref:ty,tabIndex:-1,"data-qa-id":"global-error-text",className:"my-6 outline-none",role:"alert","aria-live":"assertive","aria-atomic":"true",children:(0,t.jsx)(x.Notification,{type:tm?.includes("previously had an account with us")?"warning":"error",message:tm,multiLine:!0})}),(0,t.jsx)("div",{className:W?.fieldWrapper??(tS?"":`grid grid-cols-12 w-full ${W?.gapBetweenElement??"gap-8"}`),children:(0,Q.renderFormFields)({theme:eb?"dark":"light",formContainerComponents:B,control:e8,errors:tr,watch:te,unregister:ts,formName:E,hasSectionModel:tS,widthClasses:$,addressHandlersMap:tv,hideFields:ec,showArrowLinkWithInput:em&&!G,richTextTracking:eE})}),eM,G&&(0,t.jsxs)("div",{className:"sm:w-fit w-full flex flex-col sm:flex-row justify-center items-center gap-6",children:[(0,t.jsx)(v.Button,{type:"submit",fullWidth:!0,"data-qa-id":`${eB}-submit-button`,...ew&&tx&&{"data-tracking":JSON.stringify(ew)},disabled:ei&&ea&&!en,children:G}),J]}),U&&(0,t.jsx)("div",{className:"sm:w-fit w-full flex flex-col sm:flex-row justify-center items-center gap-6",children:(0,t.jsx)("button",{type:"submit","data-qa-id":`${eB}-submit-button`,...ew&&tx&&{"data-tracking":JSON.stringify(ew)},disabled:ei&&ea&&!en,children:U})})]})})})})})]})})})},j=function(e,i={}){let{enabled:s=!0,appearance:a="execute"}=i,n=n=>{let o,l,u,d,c,m=(0,r.c)(14),{isTokenReady:h,turnstileError:f,resetTurnstile:p,containerRef:y}=E(i),g="execute"===a,b=(0,w.getTurnstileSiteKey)();if(!s||!b){let r;return m[0]!==n?(r=(0,t.jsx)(e,{...n}),m[0]=n,m[1]=r):r=m[1],r}return m[2]!==h||m[3]!==n||m[4]!==p||m[5]!==f?(o=(0,t.jsx)(e,{...n,isTokenReady:h,turnstileError:f,resetTurnstile:p}),m[2]=h,m[3]=n,m[4]=p,m[5]=f,m[6]=o):o=m[6],m[7]===Symbol.for("react.memo_cache_sentinel")?(l=g?{position:"fixed",top:"-9999px",left:"-9999px",width:"1px",height:"1px",opacity:0}:void 0,u=g?{tabIndex:-1,"aria-hidden":!0}:{},m[7]=l,m[8]=u):(l=m[7],u=m[8]),m[9]!==y?(d=(0,t.jsx)("div",{ref:y,id:"turnstile-container",style:l,...u}),m[9]=y,m[10]=d):d=m[10],m[11]!==o||m[12]!==d?(c=(0,t.jsxs)(t.Fragment,{children:[o,d]}),m[11]=o,m[12]=d,m[13]=c):c=m[13],c};return n.displayName=`withTurnstile(${e.displayName??e.name??"Component"})`,n}((0,C.memo)(e=>{let i,a,n,o=(0,r.c)(6);return o[0]!==e?({shouldNotTriggerFocus:a,...i}=e,o[0]=e,o[1]=i,o[2]=a):(i=o[1],a=o[2]),o[3]!==i||o[4]!==a?(n=(0,t.jsx)(s.CountryStateProvider,{children:(0,t.jsx)(D,{...i,shouldNotTriggerFocus:a})}),o[3]=i,o[4]=a,o[5]=n):n=o[5],n}),{enabled:!0,appearance:"execute"});e.s(["default",0,j,"widthClasses",0,$],541626)}]);