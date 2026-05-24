(globalThis.TURBOPACK||(globalThis.TURBOPACK=[])).push(["object"==typeof document?document.currentScript:void 0,612024,e=>{"use strict";var t=e.i(998005);let i=`
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
`,o=`
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
`,r=`
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
`,l=`
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
`,n=`
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
`,s=`
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
`,m=`
  ... on FormSectionModel {
    _path
    __typename
    headline
    sectionFields {
      ${o}
      ${l}
      ${s}
      ${a}
      ${n}
      ${r}
    }
  }
`,c=`
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
            ${o}
            ${l}
            ${s}
            ${m}
            ${a}
            ${n}
            ${r}
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
`;var u=e.i(715351),d=e.i(855336);let p=async({brand:e,pageName:t,localeCountry:i,lob:o,region:a},r)=>(0,d.graphqlService)({query:c,variables:{brand:e,pageName:t,localeCountry:i,lob:o,region:a},extraHeaders:{usid:r}}),f=({brand:e,pageName:t,localeCountry:i,lob:o,region:a})=>(0,u.graphqlClientProxy)({moduleName:"formQueries",queryName:"executeFormsQuery",payload:{brand:e,pageName:t,localeCountry:i,lob:o,region:a}}),h=async(e,t,o={})=>(0,d.graphqlService)({query:i,variables:e,extraHeaders:{...t?{usid:t}:{},...o}}),y=e=>{let{csrfToken:t,...i}=e;return(0,u.graphqlClientProxy)({moduleName:"formQueries",queryName:"executeFormSubmissionMutation",payload:i,csrfToken:t,formId:e.formId})};e.s(["executeFormSubmissionMutation",0,h,"executeFormsQuery",0,p,"fetchFormContent",0,f,"fetchFormContentQuery",0,({brand:e,pageName:i,localeCountry:o,lob:a,region:r})=>(0,t.queryOptions)({queryKey:["fetch-form",i],queryFn:async()=>f({brand:e,pageName:i,localeCountry:o,lob:a,region:r})}),"submitForm",0,y,"submitFormMutation",0,()=>({mutationKey:["form-submission"],mutationFn:async e=>y(e)})],612024)},119553,e=>{"use strict";var t=e.i(294718),i=e.i(277030),o=e.i(750987),a=e.i(18670),r=e.i(293769),l=e.i(611947),n=e.i(11201),s=e.i(862911),m=e.i(565904),c=e.i(371981),u=e.i(17404),d=e.i(612024),p=e.i(211241),f=e.i(864585),h=e.i(335073),y=e.i(470069),g=e.i(79486),b=e.i(937588),T=e.i(655127),C=e.i(420896),_=e.i(925732),F=e.i(457455),S=e.i(707691);e.s(["useClickWithTireFinderParams",0,({url:e,action:$,openPromotionModal:P,sendTireFinderParams:k,pageReference:x})=>{let N,v,E,{open:A}=(0,o.useTireFinderFlyout)(),I=(0,m.default)("fetch-form"),{brand:M,lob:L,locale_country:D}=(0,s.useSiteInfo)(),R=(0,_.getTireFinderData)(),O=R?.userQualificationStatus===1,w=(v=(0,r.c)(2),E=(0,n.useRouter)(),v[0]!==E?(N=(e,t)=>{if(!e||!t||t===l.ClickActionType.NONE||t===l.ClickActionType.FLYOUT||t===l.ClickActionType.POPUP||t===l.ClickActionType.OFFER_MODAL)return;let i=e.trim();if(!i)return;let o=i.startsWith("http://")||i.startsWith("https://");t===l.ClickActionType.NEW_TAB?window.open(i,"_blank","noopener,noreferrer"):t===l.ClickActionType.SAME_TAB&&(o?window.location.href=i:E.push(i))},v[0]=E,v[1]=N):N=v[1],N),U=(0,C.useRef)(null),q=(0,F.getClientCookie)(t.CookieKeys.SelectedStore)?.storeId??null,B=(0,y.useModalStore)(e=>e.setIsOpen),j=(0,h.useFlyoutStore)(e=>e.setIsOpen),W=(0,h.useFlyoutStore)(e=>e.setBodyContent),Q=(0,y.useModalStore)(e=>e.setModalPageName),K=(0,h.useFlyoutStore)(e=>e.setHeaderContent),Y=(0,b.getQueryParamsFromUrl)(R?.tireFinderURL??""),H=(0,i.useI18n)(l.i18nModels.PRODUCT_DETAILS_MODEL),[G,z]=(0,C.useState)(!1),J=(0,C.useMemo)(()=>(0,b.buildUrlWithQueryParams)(e??"",{...Y,storeId:q}),[Y,q]),V=(0,C.useCallback)(e=>{if(!e?.__typename)return null;let t=(0,f.getComponentByID)(e.__typename);if(!t)return null;let i=(0,f.getEditableComponent)(e.__typename,t),o={customClassNames:{grid:"w-full ",form:"flex flex-col gap-8",fieldWrapper:"grid grid-cols-12 w-full gap-8",globalErrorMessage:"mb-2",gapBetweenElement:"gap-6"},...e};return C.default.createElement(i,o)},[]),X=(0,C.useCallback)(e=>C.default.createElement("div",{className:"flex flex-col gap-1"},C.default.createElement(u.Text,{variant:"subtitle-xl",tag:"h2"},e?.headline),(0,a.renderDescription)(e?.description)),[]),Z=(0,C.useCallback)(async e=>{try{let t={brand:M,lob:L,localeCountry:(0,b.formatLocale)(D),region:(0,g.getRegionFromLocale)(D),pageName:e},i=await I.fetchQuery((0,d.fetchFormContentQuery)(t)),o=i?.getFormByPath?.data?.item;if(o){let e={headline:o?.headline,description:o?.description},t={...o,headline:"",description:""},i=X(e),a=V(t);i&&K(i),a&&W(a)}}catch(e){W(null),K(null)}finally{z(!1)}},[M,D,L,W,K,V,X,I]),ee=(0,C.useCallback)(async e=>{z(!0);try{let t=await (0,p.fetchPromotionDetails)({ids:[e]}),i=t?.getPromotionDetails?.data?.data?.[0]||null,{contentBody:o,contentHeading:a}=(0,S.getPromotionContent)(G,i,H);W(o),K(a)}catch(i){let{contentBody:e,contentHeading:t}=(0,S.getPromotionContent)(!1,null,H);W(e),K(t)}finally{z(!1)}},[H]);return(0,C.useCallback)(async t=>{if(t&&"preventDefault"in t&&t.preventDefault(),$===l.ClickActionType.FLYOUT){let t=x?._path,i=x?.__typename;if("#vehicleTF"===e||"#tireSizeTF"===e)return void A(U,R?.selectorType);if("#newsletterForm"===e)return void j(!0);if(e?.toLowerCase().includes("#offer|")){let t=e?.replace(/#offer\|/i,"")||"",{contentBody:i,contentHeading:o}=(0,S.getPromotionContent)(!0,null,H);W(i),K(o),j(!0),ee(t);return}t&&"FormContainerModel"===i&&(z(!0),W(C.default.createElement("div",{className:"flex items-center justify-center h-32 w-full"},C.default.createElement(c.Loader))),j(!0),await Z(t))}if($===l.ClickActionType.POPUP){let e=x?._path;if(e){let t=(0,T.resolveUrl)(e);if(t.includes(`/${D}`)){let e=t.split(`/${D}`)[1];e?.startsWith("/modals/")||e?.startsWith("modals/")?Q(t.replace(RegExp(`/${D}/modals`),"modals")):Q(t.replace(`/${D}`,"pages"))}else Q(e);B(!0);return}}if($===l.ClickActionType.OFFER_MODAL)if(e?.toLowerCase().includes("#offer|")){let t=e?.replace(/#offer\|/i,"")||"";P?.(t)}else P?.(e||"");if(!e)return void w(null,$);let i=(0,T.resolveUrl)(e);if(i.includes("#")&&$===l.ClickActionType.SAME_TAB){let e=i.indexOf("#"),t=i.slice(e+1);if(document.getElementById(t)){let t=i.slice(e);if(globalThis.location.hash===t){let e=`${globalThis.location.pathname}${globalThis.location.search}`;globalThis.history.replaceState?.(null,"",e),setTimeout(()=>{globalThis.history.replaceState?.(null,"",t)},0)}else globalThis.history.pushState?.(null,"",t);return}}k&&O&&q&&$!==l.ClickActionType.NONE?w((0,T.resolveUrl)(J),$):w((0,T.resolveUrl)(e),$)},[$,e,A,w,k,O,J,R?.selectorType,H,ee,Z])}],119553)},62201,e=>{"use strict";e.s([],687454),e.i(687454);var t=e.i(901538),i=e.i(293769),o=e.i(861117),a=e.i(47887),r=e.i(154346),l=e.i(926750),n=e.i(633281);let s=e=>{let o,a,s,m,c,u,d,p,f,h,y,g,b,T,C=(0,i.c)(30);C[0]!==e?({icon:a,image:s,imagePosition:m,backgroundColor:c,...o}=e,C[0]=e,C[1]=o,C[2]=a,C[3]=s,C[4]=m,C[5]=c):(o=C[1],a=C[2],s=C[3],m=C[4],c=C[5]);let _=void 0===m?"top":m,F=void 0===c?"base":c;C[6]!==a?(u=Array.isArray(a)&&a.length>0?(0,n.extractLastSegment)(a[0]):"",C[6]=a,C[7]=u):u=C[7];let S=u;C[8]===Symbol.for("react.memo_cache_sentinel")?(d={base:"bg-white",light:"bg-gray-100"},C[8]=d):d=C[8];let $="base"===F?s?"top"===_?"pt-4":"pb-4":"":"p-6",P=d[F];C[9]!==$||C[10]!==P?(p={backgroundClass:P,paddingClasses:$},C[9]=$,C[10]=P,C[11]=p):p=C[11];let{backgroundClass:k,paddingClasses:x}=p,N=`flex flex-col items-start w-full h-auto flex-shrink-0 ${k}`;C[12]!==N?(f=N.trim(),C[12]=N,C[13]=f):f=C[13];let v=f;e:{let e;if(!s?.image?._publishUrl){h=null;break e}let i=s?.altText||"";C[14]!==s.image._publishUrl||C[15]!==i?(e=(0,t.jsx)("div",{className:"w-full h-auto flex items-start self-stretch relative",children:(0,t.jsx)(l.Image,{src:s.image._publishUrl,alt:i,height:"220px",as:"img",className:"w-full",objectFit:"cover",objectPosition:"center",responsiveImage:!0,imageProfile:"medium-stacked"})}),C[14]=s.image._publishUrl,C[15]=i,C[16]=e):e=C[16],h=e}let E=h,A=`${x} flex flex-col items-start self-stretch`;C[17]!==o||C[18]!==S?(y=(0,t.jsx)(r.ContentBlock,{...o,icon:S,alignment:"left",textSize:"large",iconPosition:"top",titleStyle:"subtitle",accessibilityLabel:""}),C[17]=o,C[18]=S,C[19]=y):y=C[19],C[20]!==A||C[21]!==y?(g=(0,t.jsx)("div",{className:A,children:y}),C[20]=A,C[21]=y,C[22]=g):g=C[22];let I=g;return C[23]!==I||C[24]!==E||C[25]!==_?(b="top"===_?(0,t.jsxs)(t.Fragment,{children:[E,I]}):(0,t.jsxs)(t.Fragment,{children:[I,E]}),C[23]=I,C[24]=E,C[25]=_,C[26]=b):b=C[26],C[27]!==v||C[28]!==b?(T=(0,t.jsx)("div",{className:v,children:b}),C[27]=v,C[28]=b,C[29]=T):T=C[29],T};var m=e.i(673678),c=e.i(119553),u=e.i(707691),d=e.i(100138),p=e.i(655127);let f=e=>{let r,l,n,f,h,y,g,b,T=(0,i.c)(32),{ctaUrl:C,ctaAction:_,ctaReferencePath:F,tireFinderParamsForCTA:S,ctaLabel:$,subtitle:P,backgroundColor:k,imagePosition:x}=e,N=void 0===k?"base":k,v=void 0===x?"top":x,E="modalContent"in e?e.modalContent:void 0,A="modalLabel"in e?e.modalLabel:void 0,{openPromotionModal:I,PromotionDetailsModal:M}=(0,u.usePromotionDetails)(),L=(0,a.useGenerateTestId)(""),D=(0,a.useWithParentRegion)();T[0]!==_||T[1]!==F||T[2]!==C||T[3]!==I||T[4]!==S?(r={url:C,action:_,pageReference:F,sendTireFinderParams:S,openPromotionModal:I},T[0]=_,T[1]=F,T[2]=C,T[3]=I,T[4]=S,T[5]=r):r=T[5];let R=(0,c.useClickWithTireFinderParams)(r);T[6]!==N||T[7]!==v||T[8]!==D||T[9]!==P?(l=(e,t,i)=>{if(!e)return;let a=i===o.COMPONENT_ELEMENTS.LINK?t:window.location.href,r=[N||null,v||null].filter(Boolean).join("|");return(0,d.createLinkTracking)({name:(0,d.buildCTAName)(o.COMPONENT_TYPES.MEDIUM_STACKED_CARD,P,e),componentType:o.COMPONENT_TYPES.MEDIUM_STACKED_CARD,componentName:(0,d.buildComponentName)(D,r),componentElement:i,url:a||void 0})},T[6]=N,T[7]=v,T[8]=D,T[9]=P,T[10]=l):l=T[10];let O=l;e:{let e;if(!C||!$){n=void 0;break e}T[11]!==O||T[12]!==$||T[13]!==C?(e=O($,C,o.COMPONENT_ELEMENTS.LINK),T[11]=O,T[12]=$,T[13]=C,T[14]=e):e=T[14],n=e}let w=n;t:{let e;if(!E||!A){f=void 0;break t}T[15]!==O||T[16]!==A?(e=O(A,"",o.COMPONENT_ELEMENTS.BUTTON),T[15]=O,T[16]=A,T[17]=e):e=T[17],f=e}let U=f;T[18]!==C?(h=(0,p.resolveUrl)(C),T[18]=C,T[19]=h):h=T[19],T[20]!==L||T[21]!==U||T[22]!==w||T[23]!==R||T[24]!==e||T[25]!==h?(y={...e,baseQaId:L,onHandleCTAClick:R,ctaTracking:w,buttonTracking:U,ctaUrl:h},T[20]=L,T[21]=U,T[22]=w,T[23]=R,T[24]=e,T[25]=h,T[26]=y):y=T[26];let q=y;return T[27]!==q?(g=(0,t.jsx)(m.default,{children:(0,t.jsx)(s,{...q})}),T[27]=q,T[28]=g):g=T[28],T[29]!==M||T[30]!==g?(b=(0,t.jsxs)(t.Fragment,{children:[g,M]}),T[29]=M,T[30]=g,T[31]=b):b=T[31],b};e.s(["MediumStackedCard",0,f,"default",0,f],62201)}]);