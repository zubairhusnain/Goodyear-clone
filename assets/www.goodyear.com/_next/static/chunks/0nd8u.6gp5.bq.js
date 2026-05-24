(globalThis.TURBOPACK||(globalThis.TURBOPACK=[])).push(["object"==typeof document?document.currentScript:void 0,612024,e=>{"use strict";var t=e.i(998005);let a=`
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
`,r=`
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
`,o=`
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
      ${i}
      ${l}
      ${s}
      ${r}
      ${n}
      ${o}
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
            ${l}
            ${s}
            ${m}
            ${r}
            ${n}
            ${o}
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
`;var u=e.i(715351),c=e.i(855336);let p=async({brand:e,pageName:t,localeCountry:a,lob:i,region:r},o)=>(0,c.graphqlService)({query:d,variables:{brand:e,pageName:t,localeCountry:a,lob:i,region:r},extraHeaders:{usid:o}}),h=({brand:e,pageName:t,localeCountry:a,lob:i,region:r})=>(0,u.graphqlClientProxy)({moduleName:"formQueries",queryName:"executeFormsQuery",payload:{brand:e,pageName:t,localeCountry:a,lob:i,region:r}}),f=async(e,t,i={})=>(0,c.graphqlService)({query:a,variables:e,extraHeaders:{...t?{usid:t}:{},...i}}),y=e=>{let{csrfToken:t,...a}=e;return(0,u.graphqlClientProxy)({moduleName:"formQueries",queryName:"executeFormSubmissionMutation",payload:a,csrfToken:t,formId:e.formId})};e.s(["executeFormSubmissionMutation",0,f,"executeFormsQuery",0,p,"fetchFormContent",0,h,"fetchFormContentQuery",0,({brand:e,pageName:a,localeCountry:i,lob:r,region:o})=>(0,t.queryOptions)({queryKey:["fetch-form",a],queryFn:async()=>h({brand:e,pageName:a,localeCountry:i,lob:r,region:o})}),"submitForm",0,y,"submitFormMutation",0,()=>({mutationKey:["form-submission"],mutationFn:async e=>y(e)})],612024)},119553,e=>{"use strict";var t=e.i(294718),a=e.i(277030),i=e.i(750987),r=e.i(18670),o=e.i(293769),l=e.i(611947),n=e.i(11201),s=e.i(862911),m=e.i(565904),d=e.i(371981),u=e.i(17404),c=e.i(612024),p=e.i(211241),h=e.i(864585),f=e.i(335073),y=e.i(470069),g=e.i(79486),b=e.i(937588),T=e.i(655127),x=e.i(420896),C=e.i(925732),_=e.i(457455),F=e.i(707691);e.s(["useClickWithTireFinderParams",0,({url:e,action:S,openPromotionModal:$,sendTireFinderParams:v,pageReference:N})=>{let k,I,E,{open:P}=(0,i.useTireFinderFlyout)(),w=(0,m.default)("fetch-form"),{brand:A,lob:O,locale_country:R}=(0,s.useSiteInfo)(),L=(0,C.getTireFinderData)(),M=L?.userQualificationStatus===1,D=(I=(0,o.c)(2),E=(0,n.useRouter)(),I[0]!==E?(k=(e,t)=>{if(!e||!t||t===l.ClickActionType.NONE||t===l.ClickActionType.FLYOUT||t===l.ClickActionType.POPUP||t===l.ClickActionType.OFFER_MODAL)return;let a=e.trim();if(!a)return;let i=a.startsWith("http://")||a.startsWith("https://");t===l.ClickActionType.NEW_TAB?window.open(a,"_blank","noopener,noreferrer"):t===l.ClickActionType.SAME_TAB&&(i?window.location.href=a:E.push(a))},I[0]=E,I[1]=k):k=I[1],k),j=(0,x.useRef)(null),q=(0,_.getClientCookie)(t.CookieKeys.SelectedStore)?.storeId??null,U=(0,y.useModalStore)(e=>e.setIsOpen),B=(0,f.useFlyoutStore)(e=>e.setIsOpen),W=(0,f.useFlyoutStore)(e=>e.setBodyContent),Y=(0,y.useModalStore)(e=>e.setModalPageName),K=(0,f.useFlyoutStore)(e=>e.setHeaderContent),Q=(0,b.getQueryParamsFromUrl)(L?.tireFinderURL??""),H=(0,a.useI18n)(l.i18nModels.PRODUCT_DETAILS_MODEL),[G,z]=(0,x.useState)(!1),J=(0,x.useMemo)(()=>(0,b.buildUrlWithQueryParams)(e??"",{...Q,storeId:q}),[Q,q]),V=(0,x.useCallback)(e=>{if(!e?.__typename)return null;let t=(0,h.getComponentByID)(e.__typename);if(!t)return null;let a=(0,h.getEditableComponent)(e.__typename,t),i={customClassNames:{grid:"w-full ",form:"flex flex-col gap-8",fieldWrapper:"grid grid-cols-12 w-full gap-8",globalErrorMessage:"mb-2",gapBetweenElement:"gap-6"},...e};return x.default.createElement(a,i)},[]),X=(0,x.useCallback)(e=>x.default.createElement("div",{className:"flex flex-col gap-1"},x.default.createElement(u.Text,{variant:"subtitle-xl",tag:"h2"},e?.headline),(0,r.renderDescription)(e?.description)),[]),Z=(0,x.useCallback)(async e=>{try{let t={brand:A,lob:O,localeCountry:(0,b.formatLocale)(R),region:(0,g.getRegionFromLocale)(R),pageName:e},a=await w.fetchQuery((0,c.fetchFormContentQuery)(t)),i=a?.getFormByPath?.data?.item;if(i){let e={headline:i?.headline,description:i?.description},t={...i,headline:"",description:""},a=X(e),r=V(t);a&&K(a),r&&W(r)}}catch(e){W(null),K(null)}finally{z(!1)}},[A,R,O,W,K,V,X,w]),ee=(0,x.useCallback)(async e=>{z(!0);try{let t=await (0,p.fetchPromotionDetails)({ids:[e]}),a=t?.getPromotionDetails?.data?.data?.[0]||null,{contentBody:i,contentHeading:r}=(0,F.getPromotionContent)(G,a,H);W(i),K(r)}catch(a){let{contentBody:e,contentHeading:t}=(0,F.getPromotionContent)(!1,null,H);W(e),K(t)}finally{z(!1)}},[H]);return(0,x.useCallback)(async t=>{if(t&&"preventDefault"in t&&t.preventDefault(),S===l.ClickActionType.FLYOUT){let t=N?._path,a=N?.__typename;if("#vehicleTF"===e||"#tireSizeTF"===e)return void P(j,L?.selectorType);if("#newsletterForm"===e)return void B(!0);if(e?.toLowerCase().includes("#offer|")){let t=e?.replace(/#offer\|/i,"")||"",{contentBody:a,contentHeading:i}=(0,F.getPromotionContent)(!0,null,H);W(a),K(i),B(!0),ee(t);return}t&&"FormContainerModel"===a&&(z(!0),W(x.default.createElement("div",{className:"flex items-center justify-center h-32 w-full"},x.default.createElement(d.Loader))),B(!0),await Z(t))}if(S===l.ClickActionType.POPUP){let e=N?._path;if(e){let t=(0,T.resolveUrl)(e);if(t.includes(`/${R}`)){let e=t.split(`/${R}`)[1];e?.startsWith("/modals/")||e?.startsWith("modals/")?Y(t.replace(RegExp(`/${R}/modals`),"modals")):Y(t.replace(`/${R}`,"pages"))}else Y(e);U(!0);return}}if(S===l.ClickActionType.OFFER_MODAL)if(e?.toLowerCase().includes("#offer|")){let t=e?.replace(/#offer\|/i,"")||"";$?.(t)}else $?.(e||"");if(!e)return void D(null,S);let a=(0,T.resolveUrl)(e);if(a.includes("#")&&S===l.ClickActionType.SAME_TAB){let e=a.indexOf("#"),t=a.slice(e+1);if(document.getElementById(t)){let t=a.slice(e);if(globalThis.location.hash===t){let e=`${globalThis.location.pathname}${globalThis.location.search}`;globalThis.history.replaceState?.(null,"",e),setTimeout(()=>{globalThis.history.replaceState?.(null,"",t)},0)}else globalThis.history.pushState?.(null,"",t);return}}v&&M&&q&&S!==l.ClickActionType.NONE?D((0,T.resolveUrl)(J),S):D((0,T.resolveUrl)(e),S)},[S,e,P,D,v,M,J,L?.selectorType,H,ee,Z])}],119553)},522211,656032,e=>{"use strict";var t=e.i(901538),a=e.i(861117),i=e.i(47887),r=e.i(293769),o=e.i(195988),l=e.i(17404),n=e.i(229065),s=e.i(633281),m=e.i(420896),d=e.i(872919);let u=e=>{let a,i,u,c,p=(0,r.c)(36),{baseQaId:h,tracking:f,eyebrow:y,storyTitle:g,description:b,authorName:T,minRead:x,publicationDate:C,linkUrl:_,linkAction:F,headingTag:S,onHandleLinkClick:$}=e;p[0]!==_||p[1]!==$?(a=e=>{("Enter"===e.key||" "===e.key)&&_&&(e.preventDefault(),$?.(e))},p[0]=_,p[1]=$,p[2]=a):a=p[2];let v=a,N="sameTab"===F||"newTab"===F,k=!!_,I=(void 0===S?"h3":S)??"h3",E=N?"a":"button";if(p[3]!==v||p[4]!==k||p[5]!==N||p[6]!==F||p[7]!==_||p[8]!==$||p[9]!==f){if(i={},N&&k&&(i.href=_,i.rel="newTab"===F?"noopener noreferrer":void 0,i.target="newTab"===F?"_blank":void 0,i.onKeyDown=v),N||(i.type="button",i.disabled=!k,i.onKeyDown=k?v:void 0),i.onClick=k?$:void 0,f){let e;p[11]!==f?(e=JSON.stringify(f),p[11]=f,p[12]=e):e=p[12],i["data-tracking"]=e}p[3]=v,p[4]=k,p[5]=N,p[6]=F,p[7]=_,p[8]=$,p[9]=f,p[10]=i}else i=p[10];p[13]!==I||p[14]!==T||p[15]!==h||p[16]!==b||p[17]!==y||p[18]!==k||p[19]!==F||p[20]!==x||p[21]!==C||p[22]!==g?(u=()=>(0,t.jsxs)(t.Fragment,{children:[(0,t.jsxs)("div",{className:"flex flex-col gap-2 w-full",children:[y&&(0,t.jsx)(d.default,{text:y,characterLength:255,children:(0,t.jsx)(l.Text,{tag:"span",variant:"eyebrow-md",children:y})}),g&&(0,t.jsx)(I,{className:"flex",children:(0,t.jsx)(n.TextLink,{Tag:"span",disabled:"none"===F,theme:"light",variation:"secondaryHeading",className:`!normal-case pl-0 ${k?"":"!text-action-color-secondary !cursor-default group-hover:after:scale-x-0 hover:after:scale-x-0"}`,id:`${g}-icon`,"data-qa-id":`${h}-${(0,s.transformWordToKebabCase)(g)}-link`,onClick:void 0,children:(0,t.jsx)(d.default,{text:g,characterLength:255,children:g})})}),(T||C||x)&&(0,t.jsxs)(l.Text,{variant:"subtitle-md",className:"w-full whitespace-nowrap",tag:"p",children:[T&&`${T}`,T&&(C||x)&&" • ",C&&`${(e=>{if(!e)return e;try{let t=new Date(e);if(Number.isNaN(t.getTime()))return e;return t.toLocaleDateString("en-US",{year:"numeric",month:"long",day:"numeric"})}catch{return e}})(C)}`,C&&x&&" • ",x]})]}),b&&"object"==typeof b&&"html"in b?(0,t.jsx)(o.RichText,{html:b.html}):null]}),p[13]=I,p[14]=T,p[15]=h,p[16]=b,p[17]=y,p[18]=k,p[19]=F,p[20]=x,p[21]=C,p[22]=g,p[23]=u):u=p[23];let P=u,w=k?"hover:bg-background-100 hover:[border-radius:8px] transition-all duration-200 cursor-pointer":"cursor-default",A=`group flex flex-col gap-4 p-4 rounded-lg w-full items-start text-type-standard bg-background-base ${w}`;if(p[24]!==h||p[25]!==A||p[26]!==i||p[27]!==P||p[28]!==E){let e,t;p[30]!==h||p[31]!==A||p[32]!==i?(e={"data-qa-id":h,className:A,...i},p[30]=h,p[31]=A,p[32]=i,p[33]=e):e=p[33],p[34]!==P?(t=P(),p[34]=P,p[35]=t):t=p[35],c=m.default.createElement(E,e,t),p[24]=h,p[25]=A,p[26]=i,p[27]=P,p[28]=E,p[29]=c}else c=p[29];return c};e.s(["default",0,u],656032);var c=e.i(119553),p=e.i(100138),h=e.i(937588),f=e.i(655127);let y=(0,m.memo)(e=>{let r=(0,i.useWithParentRegion)(),{linkUrl:o,linkAction:l,storyTitle:n}=e,s=(0,i.useGenerateTestId)(`story-item-${(0,h.transformWordToKebabCase)(n)}`),m=n&&o?((e,t)=>{if(e)return(0,p.createLinkTracking)({name:(0,p.buildCTAName)(a.COMPONENT_TYPES.STORY_CONTAINER,a.COMPONENT_TYPES.STORY_ITEM,e),componentType:a.COMPONENT_TYPES.STORY_ITEM,componentName:(0,p.buildComponentName)(r,a.COMPONENT_TYPES.STORY_ITEM),componentElement:a.COMPONENT_ELEMENTS.LINK,url:t||"",isExternal:(0,f.isExternalUrl)(t)})})(n,o):void 0,d=(0,c.useClickWithTireFinderParams)({url:o,action:l}),y={...e,tracking:m,baseQaId:s,onHandleLinkClick:d,linkUrl:(0,f.resolveUrl)(o??"")};return(0,t.jsx)(u,{...y})});y.displayName="StoryItem",e.s(["default",0,y],522211)},421565,e=>{"use strict";e.s([],141070),e.i(141070);var t=e.i(901538),a=e.i(293769),i=e.i(47887),r=e.i(17404),o=e.i(420896),l=e.i(872919),n=e.i(656032);let s=e=>{let i,s,m,d,u,c,p,h=(0,a.c)(24),{baseQaId:f,headline:y,storyItems:g,headingStyle:b,headingTag:T,divider:x,children:C}=e;h[0]!==g?(i=void 0===g?[]:g,h[0]=g,h[1]=i):i=h[1];let _=i,F=void 0===b?"display":b,S=void 0===T?"h2":T,$=void 0!==x&&x;h[2]!==f||h[3]!==$||h[4]!==_?(s=()=>_?_.map((e,a)=>(0,t.jsxs)(o.default.Fragment,{children:[(0,t.jsx)(n.default,{...e}),$&&a<_.length-1&&(0,t.jsx)("div",{className:"h-0.5 bg-border-light -my-5"})]},`${f}-item-${a}`)):null,h[2]=f,h[3]=$,h[4]=_,h[5]=s):s=h[5];let v=s;h[6]!==f||h[7]!==C||h[8]!==$?(m=()=>{if(!C)return null;let e=o.default.Children.toArray(C);return e.length<=1?C:e.map((a,i)=>(0,t.jsxs)(o.default.Fragment,{children:[a,$&&i<e.length-1&&(0,t.jsx)("div",{className:"h-0.5 bg-border-light -my-5"})]},`${f}-item-${i}`))},h[6]=f,h[7]=C,h[8]=$,h[9]=m):m=h[9];let N=m;return h[10]!==F||h[11]!==S||h[12]!==y?(d=y&&(0,t.jsx)(l.default,{text:y,characterLength:255,children:(0,t.jsx)(r.Text,{tag:S??"h2",className:"text-type-standard",variant:"headline"===F?"heading-lg":"display-lg",children:y})}),h[10]=F,h[11]=S,h[12]=y,h[13]=d):d=h[13],h[14]!==C||h[15]!==N||h[16]!==v?(u=C?N():v(),h[14]=C,h[15]=N,h[16]=v,h[17]=u):u=h[17],h[18]!==u?(c=(0,t.jsx)("div",{className:"flex flex-col gap-10",children:u}),h[18]=u,h[19]=c):c=h[19],h[20]!==f||h[21]!==c||h[22]!==d?(p=(0,t.jsxs)("div",{"data-qa-id":f,className:"flex flex-col max-w-screen-xxl mx-auto gap-10",children:[d,c]}),h[20]=f,h[21]=c,h[22]=d,h[23]=p):p=h[23],p};var m=e.i(673678),d=e.i(522211);let u=e=>{let r,o,l,n,d,u,p,h,f=(0,a.c)(17),y=(0,i.useGenerateTestId)("story-container");f[0]!==e?({children:r,storyItems:l,...o}=e,f[0]=e,f[1]=r,f[2]=o,f[3]=l):(r=f[1],o=f[2],l=f[3]),f[4]!==l?(n=void 0===l?[]:l,f[4]=l,f[5]=n):n=f[5];let g=n;f[6]!==g?(d=g.map(c),f[6]=g,f[7]=d):d=f[7];let b=d;f[8]!==y||f[9]!==o?(u={baseQaId:y,...o},f[8]=y,f[9]=o,f[10]=u):u=f[10];let T=u;return f[11]!==r?(p="function"==typeof r?r(null,0):r,f[11]=r,f[12]=p):p=f[12],f[13]!==b||f[14]!==p||f[15]!==T?(h=(0,t.jsx)(m.default,{children:(0,t.jsxs)(s,{...T,children:[b,p]})}),f[13]=b,f[14]=p,f[15]=T,f[16]=h):h=f[16],h};function c(e,a){return(0,t.jsx)(d.default,{...e},e._path||a)}u.displayName="StoryContainer",e.s(["StoryContainer",0,u,"default",0,u],421565)}]);