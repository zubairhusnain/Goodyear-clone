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
`,l=`
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
`,d=`
  ... on FormSectionModel {
    _path
    __typename
    headline
    sectionFields {
      ${i}
      ${n}
      ${s}
      ${r}
      ${o}
      ${l}
    }
  }
`,m=`
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
            ${s}
            ${d}
            ${r}
            ${o}
            ${l}
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
`;var c=e.i(715351),u=e.i(855336);let p=async({brand:e,pageName:t,localeCountry:a,lob:i,region:r},l)=>(0,u.graphqlService)({query:m,variables:{brand:e,pageName:t,localeCountry:a,lob:i,region:r},extraHeaders:{usid:l}}),f=({brand:e,pageName:t,localeCountry:a,lob:i,region:r})=>(0,c.graphqlClientProxy)({moduleName:"formQueries",queryName:"executeFormsQuery",payload:{brand:e,pageName:t,localeCountry:a,lob:i,region:r}}),h=async(e,t,i={})=>(0,u.graphqlService)({query:a,variables:e,extraHeaders:{...t?{usid:t}:{},...i}}),g=e=>{let{csrfToken:t,...a}=e;return(0,c.graphqlClientProxy)({moduleName:"formQueries",queryName:"executeFormSubmissionMutation",payload:a,csrfToken:t,formId:e.formId})};e.s(["executeFormSubmissionMutation",0,h,"executeFormsQuery",0,p,"fetchFormContent",0,f,"fetchFormContentQuery",0,({brand:e,pageName:a,localeCountry:i,lob:r,region:l})=>(0,t.queryOptions)({queryKey:["fetch-form",a],queryFn:async()=>f({brand:e,pageName:a,localeCountry:i,lob:r,region:l})}),"submitForm",0,g,"submitFormMutation",0,()=>({mutationKey:["form-submission"],mutationFn:async e=>g(e)})],612024)},119553,e=>{"use strict";var t=e.i(294718),a=e.i(277030),i=e.i(750987),r=e.i(18670),l=e.i(293769),n=e.i(611947),o=e.i(11201),s=e.i(862911),d=e.i(565904),m=e.i(371981),c=e.i(17404),u=e.i(612024),p=e.i(211241),f=e.i(864585),h=e.i(335073),g=e.i(470069),b=e.i(79486),y=e.i(937588),x=e.i(655127),T=e.i(420896),k=e.i(925732),C=e.i(457455),$=e.i(707691);e.s(["useClickWithTireFinderParams",0,({url:e,action:w,openPromotionModal:v,sendTireFinderParams:_,pageReference:S})=>{let N,F,j,{open:P}=(0,i.useTireFinderFlyout)(),L=(0,d.default)("fetch-form"),{brand:A,lob:M,locale_country:B}=(0,s.useSiteInfo)(),I=(0,k.getTireFinderData)(),R=I?.userQualificationStatus===1,D=(F=(0,l.c)(2),j=(0,o.useRouter)(),F[0]!==j?(N=(e,t)=>{if(!e||!t||t===n.ClickActionType.NONE||t===n.ClickActionType.FLYOUT||t===n.ClickActionType.POPUP||t===n.ClickActionType.OFFER_MODAL)return;let a=e.trim();if(!a)return;let i=a.startsWith("http://")||a.startsWith("https://");t===n.ClickActionType.NEW_TAB?window.open(a,"_blank","noopener,noreferrer"):t===n.ClickActionType.SAME_TAB&&(i?window.location.href=a:j.push(a))},F[0]=j,F[1]=N):N=F[1],N),E=(0,T.useRef)(null),W=(0,C.getClientCookie)(t.CookieKeys.SelectedStore)?.storeId??null,q=(0,g.useModalStore)(e=>e.setIsOpen),O=(0,h.useFlyoutStore)(e=>e.setIsOpen),U=(0,h.useFlyoutStore)(e=>e.setBodyContent),V=(0,g.useModalStore)(e=>e.setModalPageName),G=(0,h.useFlyoutStore)(e=>e.setHeaderContent),H=(0,y.getQueryParamsFromUrl)(I?.tireFinderURL??""),Q=(0,a.useI18n)(n.i18nModels.PRODUCT_DETAILS_MODEL),[X,K]=(0,T.useState)(!1),Y=(0,T.useMemo)(()=>(0,y.buildUrlWithQueryParams)(e??"",{...H,storeId:W}),[H,W]),z=(0,T.useCallback)(e=>{if(!e?.__typename)return null;let t=(0,f.getComponentByID)(e.__typename);if(!t)return null;let a=(0,f.getEditableComponent)(e.__typename,t),i={customClassNames:{grid:"w-full ",form:"flex flex-col gap-8",fieldWrapper:"grid grid-cols-12 w-full gap-8",globalErrorMessage:"mb-2",gapBetweenElement:"gap-6"},...e};return T.default.createElement(a,i)},[]),J=(0,T.useCallback)(e=>T.default.createElement("div",{className:"flex flex-col gap-1"},T.default.createElement(c.Text,{variant:"subtitle-xl",tag:"h2"},e?.headline),(0,r.renderDescription)(e?.description)),[]),Z=(0,T.useCallback)(async e=>{try{let t={brand:A,lob:M,localeCountry:(0,y.formatLocale)(B),region:(0,b.getRegionFromLocale)(B),pageName:e},a=await L.fetchQuery((0,u.fetchFormContentQuery)(t)),i=a?.getFormByPath?.data?.item;if(i){let e={headline:i?.headline,description:i?.description},t={...i,headline:"",description:""},a=J(e),r=z(t);a&&G(a),r&&U(r)}}catch(e){U(null),G(null)}finally{K(!1)}},[A,B,M,U,G,z,J,L]),ee=(0,T.useCallback)(async e=>{K(!0);try{let t=await (0,p.fetchPromotionDetails)({ids:[e]}),a=t?.getPromotionDetails?.data?.data?.[0]||null,{contentBody:i,contentHeading:r}=(0,$.getPromotionContent)(X,a,Q);U(i),G(r)}catch(a){let{contentBody:e,contentHeading:t}=(0,$.getPromotionContent)(!1,null,Q);U(e),G(t)}finally{K(!1)}},[Q]);return(0,T.useCallback)(async t=>{if(t&&"preventDefault"in t&&t.preventDefault(),w===n.ClickActionType.FLYOUT){let t=S?._path,a=S?.__typename;if("#vehicleTF"===e||"#tireSizeTF"===e)return void P(E,I?.selectorType);if("#newsletterForm"===e)return void O(!0);if(e?.toLowerCase().includes("#offer|")){let t=e?.replace(/#offer\|/i,"")||"",{contentBody:a,contentHeading:i}=(0,$.getPromotionContent)(!0,null,Q);U(a),G(i),O(!0),ee(t);return}t&&"FormContainerModel"===a&&(K(!0),U(T.default.createElement("div",{className:"flex items-center justify-center h-32 w-full"},T.default.createElement(m.Loader))),O(!0),await Z(t))}if(w===n.ClickActionType.POPUP){let e=S?._path;if(e){let t=(0,x.resolveUrl)(e);if(t.includes(`/${B}`)){let e=t.split(`/${B}`)[1];e?.startsWith("/modals/")||e?.startsWith("modals/")?V(t.replace(RegExp(`/${B}/modals`),"modals")):V(t.replace(`/${B}`,"pages"))}else V(e);q(!0);return}}if(w===n.ClickActionType.OFFER_MODAL)if(e?.toLowerCase().includes("#offer|")){let t=e?.replace(/#offer\|/i,"")||"";v?.(t)}else v?.(e||"");if(!e)return void D(null,w);let a=(0,x.resolveUrl)(e);if(a.includes("#")&&w===n.ClickActionType.SAME_TAB){let e=a.indexOf("#"),t=a.slice(e+1);if(document.getElementById(t)){let t=a.slice(e);if(globalThis.location.hash===t){let e=`${globalThis.location.pathname}${globalThis.location.search}`;globalThis.history.replaceState?.(null,"",e),setTimeout(()=>{globalThis.history.replaceState?.(null,"",t)},0)}else globalThis.history.pushState?.(null,"",t);return}}_&&R&&W&&w!==n.ClickActionType.NONE?D((0,x.resolveUrl)(Y),w):D((0,x.resolveUrl)(e),w)},[w,e,P,D,_,R,Y,I?.selectorType,Q,ee,Z])}],119553)},282060,e=>{"use strict";var t=e.i(901538),a=e.i(633281),i=e.i(294237),r=e.i(420896),l=e.i(708047),n=e.i(986726),o=e.i(818756),s=e.i(444348),d=e.i(969110),m=e.i(872919);let c={extraLarge:"xl",large:"lg",medium:"md",small:"sm",extraSmall:"xs"},u={extraSmall:{grid:"grid-cols-12",header:"col-start-1 col-span-12 md:col-span-4",headerCenter:"col-span-12 md:col-span-4 md:col-start-5"},small:{grid:"grid-cols-12",header:"col-start-1 col-span-12 md:col-span-6",headerCenter:"col-span-12 md:col-span-6 md:col-start-4"},medium:{grid:"grid-cols-12",header:"col-start-1 col-span-12 md:col-span-8",headerCenter:"col-span-12 md:col-span-8 md:col-start-3"},large:{grid:"grid-cols-12",header:"col-start-1 col-span-12 md:col-span-10",headerCenter:"col-span-12 md:col-span-10 md:col-start-2"},extraLarge:{grid:"grid-cols-12",header:"col-start-1 col-span-12",headerCenter:"col-span-12"}},p=(0,i.cva)("flex  flex-row items-center gap-6 ",{variants:{alignment:{onlyCta:"items-start",withButton:"items-center"},justify:{left:"justify-start",center:"justify-center",leftSmRight:"justify-start sm:justify-end"}},defaultVariants:{alignment:"withButton",justify:"left"}}),f=(0,i.cva)("w-full sm:w-fit",{variants:{textAlign:{left:"text-left",center:"text-center",leftSmRight:"text-left sm:text-right"}},defaultVariants:{textAlign:"left"}}),h=(0,r.memo)(({headline:e,headingTag:i="h2",headerPosition:h="fullWidth",mode:g,eyebrow:b,divider:y=!1,ctaLabel:x,ctaUrl:T,ctaAction:k,ctaAccessibilityLabel:C,baseQaId:$,tracking:w={},inheritBackground:v=!1,onDark:_,headerTitleWidth:S="medium",headingStyle:N="heading",alignment:F,buttonAccessibilityLabel:j,buttonLabel:P,buttonAction:L,buttonUrl:A,buttonTracking:M,ctaTracking:B,description:I,onHandleButtonClick:R,onHandleLinkClick:D,headlineSize:E="medium",className:W})=>{let q,O,U="dark"===g||_?"dark":"light",V=c[E],G=u[S],H=(0,r.useMemo)(()=>"display"===N?`scripted-${V}`:"sm"===V?"eyebrow-md":`eyebrow-${V}`,[N,V]),Q=x&&!P?"onlyCta":"withButton",X=(0,r.useMemo)(()=>{let e={left:"justify-start",center:"justify-center",right:"justify-end"};return F?e[F]:"center"===h?e.center:e.left},[F,h]),K=(0,r.useMemo)(()=>"fullWidth"===h?"xs"===V?"leftSmRight":"left":"center"===h?"center":"left",[h,V]),Y=(0,r.useMemo)(()=>"fullWidth"===h?"xs"===V?"leftSmRight":"left":"center"===h?"center":"left",[h,V]),z=v?"":"dark"===U?"bg-black":"bg-white",J="fullWidth"===h?"flex flex-col sm:flex-row sm:justify-between sm:items-center gap-6 w-full":"left"===h?"grid grid-cols-1 justify-items-start gap-6":"grid grid-cols-1 sm:justify-items-center sm:text-center gap-6 w-full",Z="center"===h?"justify-self-center":"justify-self-start",ee=(0,r.useMemo)(()=>{let e="headline"===N?"heading":N;return`${e}-${V}`},[V,N]),et=(0,r.useMemo)(()=>e?(0,t.jsx)(m.default,{text:e,characterLength:100,rows:2,classNames:"!pb-0",children:(0,t.jsx)(l.default,{theme:U,variant:ee,tag:i??"h2",className:`${X} flex flex-wrap w-full normal-case`,children:e.split(" ").map((e,a)=>(0,t.jsx)("span",{className:"whitespace-nowrap",children:e},`${e}-${a}`))})}):null,[ee,e,X,i,U]),ea=(0,r.useMemo)(()=>I&&"object"==typeof I&&"html"in I&&I.html?(0,t.jsx)("div",{children:(0,t.jsx)(d.default,{html:I.html,pVariant:"display"===N?`scripted-${"xl"===V?"lg":V}`:`paragraph-${"xl"===V?"lg":V}`,className:`inline ${"dark"===U?"text-action-color-secondary-on-dark":"text-action-color-secondary"}`})}):null,[I,N,V,U]);return(0,t.jsxs)("div",{className:`w-full ${z} ${W} ${"center"===h?"grid w-full sm:justify-items-center sm:text-center":"grid"}`,"data-qa-id":$,"data-mode":U,children:[(0,t.jsxs)("div",{className:`w-full ${J}`,children:[(0,t.jsx)("div",{className:`${Z} ${"fullWidth"===h?"flex-1 min-w-0":""}`,children:(0,t.jsx)("div",{className:`w-full grid ${G?.grid} `,children:(0,t.jsxs)("div",{className:`flex flex-col ${"center"===h?G?.headerCenter:G?.header} ${"center"===h?"text-center":""} ${"large"===E?"gap-4":"gap-2"} sm:pr-6`,children:[b&&(0,t.jsx)(m.default,{text:b,characterLength:60,rows:1,children:(0,t.jsx)(l.default,{theme:U,variant:H,tag:"span",className:"!normal-case",children:b})}),(0,t.jsxs)("div",{className:`flex flex-col ${"large"===E?"gap-4":"gap-2"}`,children:[et,ea]})]})})}),(P||x)&&(0,t.jsxs)("div",{className:`
    ${p({alignment:Q,justify:K})}
    ${"fullWidth"===h?"w-full sm:w-fit ml-0 sm:ml-auto flex-shrink-0 flex-row":"w-full"}
  `,children:[P&&(q="sameTab"===L||"newTab"===L,(0,t.jsx)(s.default,{Tag:q?"a":"button",disabled:"none"===L,theme:U,"aria-labelledby":j||e,"data-qa-id":`${$}-${(0,a.transformWordToKebabCase)(P)}-button`,id:`${P}-button`,name:`${P}-button`,className:"w-full sm:!w-fit !m-0 whitespace-nowrap",href:q?A:null,onClick:q?void 0:R,tracking:M,children:(0,t.jsx)(m.default,{text:P,characterLength:60,rows:1,children:P})})),x&&(O="sameTab"===k||"newTab"===k,(0,t.jsx)("div",{className:f({textAlign:Y}),children:(0,t.jsx)(o.ArrowLink,{Tag:O?"a":"button",variation:"primary",disabled:"none"===k,theme:U,href:O?T:null,rel:"newTab"===k?"noopener noreferrer":void 0,external:"newTab"===k,className:"!normal-case pl-0 whitespace-nowrap",ariaLabel:C,id:`${x}-icon`,onClick:O?void 0:D,"data-qa-id":`${$}-${(0,a.transformWordToKebabCase)(x)}-link`,tracking:B,"data-tracking":JSON.stringify({URL:`${T}`,...w}),children:(0,t.jsx)(m.default,{text:x,characterLength:60,rows:1,children:x})})}))]})]}),y&&(0,t.jsx)("div",{className:"pt-8 w-full",children:(0,t.jsx)(n.Divider,{theme:g})})]})});h.displayName="ComponentHeader",e.s(["default",0,h],282060)},196033,e=>{"use strict";var t=e.i(282060);e.s(["ComponentHeader",()=>t.default])},582339,e=>{"use strict";var t=e.i(293769),a=e.i(611947),i=e.i(420896);e.s(["useBreakpoint",0,function(){let e,r,l=(0,t.c)(2),[n,o]=(0,i.useState)("BASE");return l[0]===Symbol.for("react.memo_cache_sentinel")?(e=()=>{let e=()=>{let e=window.innerWidth;e<a.BreakPointVariables.XS?o("BASE"):e>=a.BreakPointVariables.XS&&e<a.BreakPointVariables.SM?o("XS"):e>=a.BreakPointVariables.SM&&e<a.BreakPointVariables.MD?o("SM"):e>=a.BreakPointVariables.MD&&e<a.BreakPointVariables.LG?o("MD"):e>=a.BreakPointVariables.LG&&e<a.BreakPointVariables.XL?o("LG"):e>=a.BreakPointVariables.XL&&e<a.BreakPointVariables.XXL?o("XL"):o("XXL")};return e(),window.addEventListener("resize",e),()=>window.removeEventListener("resize",e)},r=[],l[0]=e,l[1]=r):(e=l[0],r=l[1]),(0,i.useEffect)(e,r),n}])},82413,e=>{"use strict";var t=e.i(901538),a=e.i(861117),i=e.i(47887),r=e.i(582339),l=e.i(519828),n=e.i(196033),o=e.i(464118),s=e.i(294237),d=e.i(264458),m=e.i(420896);let c=(0,s.cva)("grid grid-cols-12 w-full component [&.component_&]:p-0",{variants:{colorBackground:{base:"bg-background-base",primary:"bg-background-primary",secondary:"bg-background-secondary",light:"bg-background-100",dark:"bg-background-800",primaryLight:"bg-background-primary-light"},componentWidth:{fullBleed:"",pageWidth:"max-w-screen-xxl mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16",mediumWidth:"max-w-screen-xxl mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16"}},defaultVariants:{colorBackground:"base",componentWidth:"pageWidth"}}),u=(0,s.cva)("col-span-12",{variants:{componentWidth:{mediumWidth:"md:col-span-8 md:col-start-3",fullBleed:"",pageWidth:""}},defaultVariants:{componentWidth:"pageWidth"}}),p={1:"col-span-12 flex",2:"col-span-6 flex",3:"col-span-4 flex",4:"col-span-6 xl:col-span-3 flex"},f={responsive:"col-span-12 flex",2:"col-span-6 flex",3:"col-span-4 flex"},h={responsive:"col-span-12 flex",1:"col-span-12 flex",2:"col-span-6 flex"},g=(0,m.memo)(({headerDivider:e,contentDivider:a,gridComponents:i,colorBackground:r,desktopLayout:s,componentWidth:m,tabletLayout:g,mobileLayout:b,breakpoint:y,children:x,ctaQaId:T,onHandleButtonClick:k,isBottomButtonVisible:C,baseQaId:$,...w})=>{let v,_=w?.onDark?"dark":"light",S=`ComponentHeader-${(w?.headline||"")?.split(" ")?.join("-")}`,N=C&&w?.headerPosition==="center",F={...w,mode:_,divider:e,baseQaId:`${$}-ComponentHeader`,id:S,inheritBackground:!0,buttonLabel:N?void 0:w?.buttonLabel,buttonUrl:N?void 0:w?.buttonUrl,onHandleButtonClick:N?void 0:k};return(0,t.jsx)("div",{className:(0,d.default)(c({colorBackground:r,componentWidth:m})),"data-qa-id":$,children:(0,t.jsx)("div",{className:u({componentWidth:m}),children:(0,t.jsxs)("div",{className:"max-w-[var(--breakpoint-container-max-width)] mx-auto",children:[w?.headline&&(0,t.jsx)(n.ComponentHeader,{...F}),(0,t.jsx)("div",{className:`${a?"my-3":"md:gap-6 gap-8"}${w?.headline?" mt-8":""}`,children:(0,t.jsx)(o.Grid,{fullWidth:!0,className:(0,d.default)("grid grid-cols-12 max-w-screen-xxl mx-auto",{"xxs:divide-y sm:divide-y-0 divide-background-300 sm:gap-y-8 sm:gap-x-0 xxs:gap-x-0 xxs:gap-y-0":a,"xxs:gap-6 xs:gap-8 md:gap-6":!a}),children:(0,t.jsx)("ul",{className:"contents",children:i?.map((e,r)=>{let l=(r+1)%("SM"===y?"responsive"===g?1:Number.parseInt(g):"XS"===y||"BASE"===y?"responsive"===b?1:Number.parseInt(b):Number.parseInt(s))==0||r===i.length-1,n=e._path||`grid-item-${r}`;return(0,t.jsx)("li",{className:(0,d.default)("XS"===y||"BASE"===y?h[b]:"SM"===y?f[g]:p[s],{"sm:px-8 xxs:mx-4 sm:mx-0 xs:mx-6 sm:py-0 py-8":a,"border-r border-background-300":a&&!l}),children:"function"==typeof x?x(e,r):null},n)})})})}),C&&w?.buttonLabel&&w?.headerPosition==="center"&&(v=w?.buttonAction==="sameTab"||w?.buttonAction==="newTab",(0,t.jsx)("div",{className:"w-full flex justify-center items-center mt-10",children:(0,t.jsx)("div",{className:"w-full sm:w-fit",children:(0,t.jsx)(l.Button,{disabled:w?.buttonAction==="none",styleType:"solid",Tag:v?"a":"button",variant:"primary",theme:_,"aria-labelledby":w?.headline,href:v?w?.buttonUrl||"":void 0,target:w?.buttonAction==="newTab"?"_blank":"_self",rel:w?.buttonAction==="newTab"?"noopener noreferrer":void 0,className:"w-fit","data-tracking":JSON.stringify(w?.buttonTracking),"data-qa-id":T,onClick:k,children:w?.buttonLabel})})}))]})})})});g.displayName="GridContainer";var b=e.i(673678),y=e.i(119553),x=e.i(707691),T=e.i(100138),k=e.i(937588),C=e.i(864585),$=e.i(853721);let w=(0,m.memo)(e=>{let l=(0,i.useGenerateTestId)("GridContainer"),n=(0,r.useBreakpoint)(),o=(0,i.useWithParentRegion)(),{openPromotionModal:s,PromotionDetailsModal:d}=(0,x.usePromotionDetails)(),{gridComponents:c,headline:u,tireFinderParamsForCTA:p,ctaReferencePath:f,ctaAction:h,ctaLabel:w,ctaUrl:v,tireFinderParamsForButton:_,buttonReferencePath:S,buttonLabel:N,buttonAction:F,buttonUrl:j,onDark:P,desktopLayout:L,tracking:A}=e,M=(0,m.useMemo)(()=>a.COMPONENT_TYPES.GRID_CONTAINER,[]),B=(0,m.useMemo)(()=>{let e=P?"dark":"light",t=`${L}col`,a=`${t}-${e}`;return(0,T.buildComponentName)(o,a)},[P,L,o]),I=(0,y.useClickWithTireFinderParams)({url:j,action:F??"none",pageReference:S,sendTireFinderParams:_,openPromotionModal:s}),R=(0,y.useClickWithTireFinderParams)({url:v,action:h??"none",pageReference:f,sendTireFinderParams:p,openPromotionModal:s}),D=(0,m.useMemo)(()=>{if(N)return(0,T.createLinkTracking)({name:(0,T.buildCTAName)(M,u||"",N),componentType:M,componentName:B,url:j||"",componentElement:"link",isExternal:"newTab"===F,additionalData:{...A}})},[M,u,N,B,j,F,A]),E=(0,m.useMemo)(()=>{if(w)return(0,T.createLinkTracking)({name:(0,T.buildCTAName)(M,u||"",w),componentType:M,componentName:B,url:v||"",componentElement:"link",isExternal:"newTab"===h,additionalData:{...A}})},[w,M,B,v,h,A,u]),W=(0,m.useMemo)(()=>!!c?.[0]&&c[0]?.__typename==="SmallStackedCardModel",[c]),q=(0,m.useMemo)(()=>({...e,baseQaId:l,breakpoint:n,ctaTracking:E,buttonTracking:D,isBottomButtonVisible:W,onHandleButtonClick:I,onHandleLinkClick:R}),[e,l,n,E,D,W,I,R]),O=(0,m.useCallback)((e,a)=>{if(!e?.__typename)return null;let r=(0,$.getComponentName)(e.__typename),n=(0,C.getComponentByID)(e.__typename);if(!n)return null;let o=(0,C.getEditableComponent)(e.__typename,n),s=`${r}-${a}`,d=(0,k.transformWordToKebabCase)(r),m={...e,..."CategoryCard"===r&&{width:"responsive"},..."DataDisplay"===r&&!e?.onDark&&{onDark:P},baseQaId:`${l}-${s}`};return(0,t.jsx)(i.RegionProvider,{prefix:d,componentName:d,children:(0,t.jsx)(o,{...m})},s)},[l,P]);return(0,t.jsxs)(t.Fragment,{children:[(0,t.jsx)(b.default,{children:(0,t.jsx)(g,{...q,children:(e,t)=>O(e,t)})}),d]})});w.displayName="GridContainer",e.s(["default",0,w],82413)},843091,e=>{"use strict";e.s([],692931),e.i(692931);var t=e.i(82413);e.s(["GridContainer",()=>t.default,"default",()=>t.default],843091)},243701,e=>{e.n(e.i(843091))}]);