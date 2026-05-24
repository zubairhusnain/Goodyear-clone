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
`,n=`
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
      ${o}
      ${n}
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
            ${l}
            ${s}
            ${m}
            ${r}
            ${o}
            ${n}
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
`;var c=e.i(715351),d=e.i(855336);let p=async({brand:e,pageName:t,localeCountry:a,lob:i,region:r},n)=>(0,d.graphqlService)({query:u,variables:{brand:e,pageName:t,localeCountry:a,lob:i,region:r},extraHeaders:{usid:n}}),f=({brand:e,pageName:t,localeCountry:a,lob:i,region:r})=>(0,c.graphqlClientProxy)({moduleName:"formQueries",queryName:"executeFormsQuery",payload:{brand:e,pageName:t,localeCountry:a,lob:i,region:r}}),h=async(e,t,i={})=>(0,d.graphqlService)({query:a,variables:e,extraHeaders:{...t?{usid:t}:{},...i}}),b=e=>{let{csrfToken:t,...a}=e;return(0,c.graphqlClientProxy)({moduleName:"formQueries",queryName:"executeFormSubmissionMutation",payload:a,csrfToken:t,formId:e.formId})};e.s(["executeFormSubmissionMutation",0,h,"executeFormsQuery",0,p,"fetchFormContent",0,f,"fetchFormContentQuery",0,({brand:e,pageName:a,localeCountry:i,lob:r,region:n})=>(0,t.queryOptions)({queryKey:["fetch-form",a],queryFn:async()=>f({brand:e,pageName:a,localeCountry:i,lob:r,region:n})}),"submitForm",0,b,"submitFormMutation",0,()=>({mutationKey:["form-submission"],mutationFn:async e=>b(e)})],612024)},119553,e=>{"use strict";var t=e.i(294718),a=e.i(277030),i=e.i(750987),r=e.i(18670),n=e.i(293769),l=e.i(611947),o=e.i(11201),s=e.i(862911),m=e.i(565904),u=e.i(371981),c=e.i(17404),d=e.i(612024),p=e.i(211241),f=e.i(864585),h=e.i(335073),b=e.i(470069),g=e.i(79486),y=e.i(937588),T=e.i(655127),C=e.i(420896),k=e.i(925732),_=e.i(457455),x=e.i(707691);e.s(["useClickWithTireFinderParams",0,({url:e,action:F,openPromotionModal:N,sendTireFinderParams:S,pageReference:$})=>{let P,A,E,{open:w}=(0,i.useTireFinderFlyout)(),v=(0,m.default)("fetch-form"),{brand:O,lob:I,locale_country:L}=(0,s.useSiteInfo)(),M=(0,k.getTireFinderData)(),R=M?.userQualificationStatus===1,D=(A=(0,n.c)(2),E=(0,o.useRouter)(),A[0]!==E?(P=(e,t)=>{if(!e||!t||t===l.ClickActionType.NONE||t===l.ClickActionType.FLYOUT||t===l.ClickActionType.POPUP||t===l.ClickActionType.OFFER_MODAL)return;let a=e.trim();if(!a)return;let i=a.startsWith("http://")||a.startsWith("https://");t===l.ClickActionType.NEW_TAB?window.open(a,"_blank","noopener,noreferrer"):t===l.ClickActionType.SAME_TAB&&(i?window.location.href=a:E.push(a))},A[0]=E,A[1]=P):P=A[1],P),U=(0,C.useRef)(null),q=(0,_.getClientCookie)(t.CookieKeys.SelectedStore)?.storeId??null,B=(0,b.useModalStore)(e=>e.setIsOpen),j=(0,h.useFlyoutStore)(e=>e.setIsOpen),W=(0,h.useFlyoutStore)(e=>e.setBodyContent),Y=(0,b.useModalStore)(e=>e.setModalPageName),Q=(0,h.useFlyoutStore)(e=>e.setHeaderContent),H=(0,y.getQueryParamsFromUrl)(M?.tireFinderURL??""),z=(0,a.useI18n)(l.i18nModels.PRODUCT_DETAILS_MODEL),[K,G]=(0,C.useState)(!1),V=(0,C.useMemo)(()=>(0,y.buildUrlWithQueryParams)(e??"",{...H,storeId:q}),[H,q]),J=(0,C.useCallback)(e=>{if(!e?.__typename)return null;let t=(0,f.getComponentByID)(e.__typename);if(!t)return null;let a=(0,f.getEditableComponent)(e.__typename,t),i={customClassNames:{grid:"w-full ",form:"flex flex-col gap-8",fieldWrapper:"grid grid-cols-12 w-full gap-8",globalErrorMessage:"mb-2",gapBetweenElement:"gap-6"},...e};return C.default.createElement(a,i)},[]),X=(0,C.useCallback)(e=>C.default.createElement("div",{className:"flex flex-col gap-1"},C.default.createElement(c.Text,{variant:"subtitle-xl",tag:"h2"},e?.headline),(0,r.renderDescription)(e?.description)),[]),Z=(0,C.useCallback)(async e=>{try{let t={brand:O,lob:I,localeCountry:(0,y.formatLocale)(L),region:(0,g.getRegionFromLocale)(L),pageName:e},a=await v.fetchQuery((0,d.fetchFormContentQuery)(t)),i=a?.getFormByPath?.data?.item;if(i){let e={headline:i?.headline,description:i?.description},t={...i,headline:"",description:""},a=X(e),r=J(t);a&&Q(a),r&&W(r)}}catch(e){W(null),Q(null)}finally{G(!1)}},[O,L,I,W,Q,J,X,v]),ee=(0,C.useCallback)(async e=>{G(!0);try{let t=await (0,p.fetchPromotionDetails)({ids:[e]}),a=t?.getPromotionDetails?.data?.data?.[0]||null,{contentBody:i,contentHeading:r}=(0,x.getPromotionContent)(K,a,z);W(i),Q(r)}catch(a){let{contentBody:e,contentHeading:t}=(0,x.getPromotionContent)(!1,null,z);W(e),Q(t)}finally{G(!1)}},[z]);return(0,C.useCallback)(async t=>{if(t&&"preventDefault"in t&&t.preventDefault(),F===l.ClickActionType.FLYOUT){let t=$?._path,a=$?.__typename;if("#vehicleTF"===e||"#tireSizeTF"===e)return void w(U,M?.selectorType);if("#newsletterForm"===e)return void j(!0);if(e?.toLowerCase().includes("#offer|")){let t=e?.replace(/#offer\|/i,"")||"",{contentBody:a,contentHeading:i}=(0,x.getPromotionContent)(!0,null,z);W(a),Q(i),j(!0),ee(t);return}t&&"FormContainerModel"===a&&(G(!0),W(C.default.createElement("div",{className:"flex items-center justify-center h-32 w-full"},C.default.createElement(u.Loader))),j(!0),await Z(t))}if(F===l.ClickActionType.POPUP){let e=$?._path;if(e){let t=(0,T.resolveUrl)(e);if(t.includes(`/${L}`)){let e=t.split(`/${L}`)[1];e?.startsWith("/modals/")||e?.startsWith("modals/")?Y(t.replace(RegExp(`/${L}/modals`),"modals")):Y(t.replace(`/${L}`,"pages"))}else Y(e);B(!0);return}}if(F===l.ClickActionType.OFFER_MODAL)if(e?.toLowerCase().includes("#offer|")){let t=e?.replace(/#offer\|/i,"")||"";N?.(t)}else N?.(e||"");if(!e)return void D(null,F);let a=(0,T.resolveUrl)(e);if(a.includes("#")&&F===l.ClickActionType.SAME_TAB){let e=a.indexOf("#"),t=a.slice(e+1);if(document.getElementById(t)){let t=a.slice(e);if(globalThis.location.hash===t){let e=`${globalThis.location.pathname}${globalThis.location.search}`;globalThis.history.replaceState?.(null,"",e),setTimeout(()=>{globalThis.history.replaceState?.(null,"",t)},0)}else globalThis.history.pushState?.(null,"",t);return}}S&&R&&q&&F!==l.ClickActionType.NONE?D((0,T.resolveUrl)(V),F):D((0,T.resolveUrl)(e),F)},[F,e,w,D,S,R,V,M?.selectorType,z,ee,Z])}],119553)},705527,e=>{"use strict";var t=e.i(901538),a=e.i(293769),i=e.i(861117),r=e.i(47887),n=e.i(633281),l=e.i(264458),o=e.i(420896),s=e.i(977730),m=e.i(154346);let u={base:"bg-background-base",primary:"bg-background-primary",secondary:"bg-background-secondary",light:"bg-background-100",dark:"bg-background-800",transparent:"bg-transparent",primaryLight:"bg-background-primary-light"},c={extraSmall:"min-h-[360px] h-full",small:"min-h-[480px] h-full",medium:"min-h-[560px] h-full",large:"min-h-[640px] h-full",extraLarge:"min-h-[720px] h-full",fitContent:"min-h-fit h-full"},d=(0,o.memo)(({backgroundColor:e="base",backgroundImage:a,onDark:i=!1,icon:r,iconPosition:d="top",textSize:p="medium",cornerStyle:f="default",contentHorizontalPlacement:h="left",contentVerticalPlacement:b="center",contentWidth:g="m",contentHeight:y,children:T,className:C="",style:k,baseQaId:_,titleStyle:x,inlineLabel:F,onHandleInlineClick:N,buttonTracking:S,enableGradient:$=!1,entireCardClickable:P=!1,removePadding:A=!1,...E})=>{let w=a?.image?._publishUrl||"",v=a?.altText||"",O=!!w,I=i||O||"dark"===e||"primary"===e,L=(0,o.useMemo)(()=>Array.isArray(r)&&r.length>0?(0,n.extractLastSegment)(r[0]):r||"",[r]),M=P&&E?.linkUrl&&!E?.linkLabel&&!E?.buttonLabel&&!E?.buttonUrl,R=(0,o.useMemo)(()=>{switch(h){case"center":return"justify-center";case"right":return"justify-end";default:return"justify-start"}},[h]),D=(0,o.useMemo)(()=>{switch(b){case"top":return"items-start";case"bottom":return"items-end";default:return"items-center"}},[b]),U=(0,l.default)("relative w-full h-full overflow-hidden","rounded"===f&&"rounded-lg",!O&&u[e],C,M?"cursor-pointer":"cursor-default"),q=(0,o.useMemo)(()=>{switch(h){case"center":return"text-center";case"right":return"text-right";default:return"text-left"}},[h]),B=(0,n.normalizeContentHeight)(y),j=B&&B in c?c[B]:"h-full",W=(0,o.useMemo)(()=>A?"p-0":"p-6 md:p-10",[A]),Y=(0,o.useCallback)((e,t)=>{e&&("sameTab"===t?globalThis.location.href=e:globalThis.open(e,"_blank","noopener,noreferrer"))},[]),Q=(0,o.useCallback)(e=>{("Enter"===e.key||" "===e.key)&&(e.preventDefault(),Y(E?.linkUrl,E?.linkAction))},[E?.linkUrl,E?.linkAction,Y]),H=(0,o.useMemo)(()=>M?{role:"button",tabIndex:0,"aria-label":E?.linkLabel||E?.linkAccessibilityLabel,onClick:()=>Y(E?.linkUrl,E?.linkAction),onKeyDown:Q}:{},[M,E?.linkUrl,E?.linkAction,E?.linkLabel,Y,Q]);return(0,t.jsxs)("div",{className:U,style:k,"data-qa-id":_,...H,children:[O&&(0,t.jsxs)(t.Fragment,{children:[(0,t.jsx)(s.default,{variant:"background",src:w,alt:v,as:"img",ariaLabel:v,objectFit:"cover",objectPosition:"center",className:"absolute inset-0 w-full h-full",responsiveImage:!0,imageProfile:"content-card"}),$&&(0,t.jsx)("div",{className:"absolute inset-0 w-full h-full bg-[linear-gradient(180deg,rgba(0,0,0,0)_44.76%,rgba(0,0,0,0.29)_59.17%,#000_100%)]","aria-hidden":"true"})]}),(0,t.jsx)("div",{className:`relative min-w-[310px] z-[1] ${W} flex ${j} ${R} ${D}`,children:(0,t.jsx)("div",{className:`w-full ${{xs:"max-w-[400px]",s:"max-w-[480px]",m:"max-w-[560px]",l:"max-w-[640px]",xl:"max-w-[800px] lg:max-w-[1024px]",fitContent:"max-w-full"}[g]} ${q}`,children:(0,o.isValidElement)(T)?T:(0,t.jsx)(m.ContentBlock,{...{...E,titleStyle:x,...L?{icon:L}:{},...d?{iconPosition:d}:{},alignment:h,inlineLabel:F,onHandleInlineClick:N,buttonTracking:S},baseQaId:`${_}-ContentBlock`,onDark:I,textSize:p})})})]})});d.displayName="ContentCard";var p=e.i(119553),f=e.i(707691),h=e.i(100138),b=e.i(655127);let g=(0,o.memo)(e=>{let n,l,o,s,m,u,c,g,y,T,C,k,_=(0,a.c)(83),x=(0,r.useGenerateTestId)(),{linkUrl:F,buttonUrl:N,linkAction:S,buttonAction:$,tireFinderParamsForLink:P,tireFinderParamsForButton:A,alignment:E,headline:w,buttonLabel:v,linkReferencePath:O,buttonReferencePath:I,linkLabel:L,ctaLabel:M,ctaUrl:R,ctaAction:D,tagLabel:U,tracking:q,cornerStyle:B,contentHorizontalPlacement:j,contentVerticalPlacement:W,contentWidth:Y,ctaNamePrefix:Q,ctaNameParts:H,componentNameOverride:z,componentTypeForTracking:K}=e,G=(0,r.useWithParentRegion)(),{componentName:V}=(0,r.useComponentInfo)(),{openPromotionModal:J,PromotionDetailsModal:X}=(0,f.usePromotionDetails)();e:{let e,t;_[0]!==j||_[1]!==W||_[2]!==Y||_[3]!==B?(e=[B,j,W,Y].filter(Boolean),_[0]=j,_[1]=W,_[2]=Y,_[3]=B,_[4]=e):e=_[4];let a=e,r=a.length>0?a.join("-"):void 0,l=r&&"default"!==r?r:void 0;if(z){n=z;break e}_[5]!==V||_[6]!==Q||_[7]!==l||_[8]!==G?(t=Q?(0,h.buildComponentName)(Q,V??i.COMPONENT_TYPES.CONTENT_CARD):(0,h.buildComponentName)(G||"",l??""),_[5]=V,_[6]=Q,_[7]=l,_[8]=G,_[9]=t):t=_[9],n=t}let Z=n;_[10]!==V||_[11]!==H||_[12]!==Q||_[13]!==w?(l=H&&H.length>0?[...H,V??i.COMPONENT_TYPES.CONTENT_CARD,w??""]:Q?[Q,V??i.COMPONENT_TYPES.CONTENT_CARD,w??""]:[V??i.COMPONENT_TYPES.CONTENT_CARD,w??""],_[10]=V,_[11]=H,_[12]=Q,_[13]=w,_[14]=l):l=_[14];let ee=l;t:{let e;if(!v){o=null;break t}_[15]!==$||_[16]!==v||_[17]!==N||_[18]!==Z||_[19]!==V||_[20]!==K||_[21]!==ee?(e=(0,h.createLinkTracking)({name:(0,h.buildCTAName)(...ee,v),componentType:K??V??i.COMPONENT_TYPES.CONTENT_CARD,componentName:Z,url:N??"",componentElement:"button",isExternal:"newTab"===$}),_[15]=$,_[16]=v,_[17]=N,_[18]=Z,_[19]=V,_[20]=K,_[21]=ee,_[22]=e):e=_[22],o=e}let et=o;a:{let e;if(!L){s=null;break a}_[23]!==Z||_[24]!==V||_[25]!==K||_[26]!==ee||_[27]!==S||_[28]!==L||_[29]!==F||_[30]!==U?(e=(0,h.createLinkTracking)({name:(0,h.buildCTAName)(...ee,L),componentType:K??V??i.COMPONENT_TYPES.CONTENT_CARD,componentName:Z,url:F??"",componentElement:"link",isExternal:"newTab"===S,componentBadge:U}),_[23]=Z,_[24]=V,_[25]=K,_[26]=ee,_[27]=S,_[28]=L,_[29]=F,_[30]=U,_[31]=e):e=_[31],s=e}let ea=s;i:{let e;if(!M){m=null;break i}_[32]!==Z||_[33]!==V||_[34]!==K||_[35]!==D||_[36]!==M||_[37]!==ee||_[38]!==R||_[39]!==U||_[40]!==q?(e=(0,h.createLinkTracking)({name:(0,h.buildCTAName)(...ee,M),componentType:K??V??i.COMPONENT_TYPES.CONTENT_CARD,componentName:Z,url:R??"",componentElement:"link",isExternal:"newTab"===D,componentBadge:U,additionalData:{...q}}),_[32]=Z,_[33]=V,_[34]=K,_[35]=D,_[36]=M,_[37]=ee,_[38]=R,_[39]=U,_[40]=q,_[41]=e):e=_[41],m=e}let ei=m;_[42]!==N?(u=N?(0,b.resolveUrl)(N):"",_[42]=N,_[43]=u):u=_[43],_[44]!==R?(c=R?(0,b.resolveUrl)(R):"",_[44]=R,_[45]=c):c=_[45],_[46]!==E||_[47]!==x||_[48]!==v||_[49]!==et||_[50]!==j||_[51]!==W||_[52]!==Y||_[53]!==B||_[54]!==D||_[55]!==M||_[56]!==ei||_[57]!==w||_[58]!==L||_[59]!==ea||_[60]!==e||_[61]!==u||_[62]!==c?(g={...e,baseQaId:x,alignment:E,headline:w,buttonLabel:v,buttonUrl:u,linkLabel:L,ctaLabel:M,ctaUrl:c,ctaAction:D,buttonTracking:et,linkTracking:ea,ctaTracking:ei,cornerStyle:B,contentHorizontalPlacement:j,contentVerticalPlacement:W,contentWidth:Y},_[46]=E,_[47]=x,_[48]=v,_[49]=et,_[50]=j,_[51]=W,_[52]=Y,_[53]=B,_[54]=D,_[55]=M,_[56]=ei,_[57]=w,_[58]=L,_[59]=ea,_[60]=e,_[61]=u,_[62]=c,_[63]=g):g=_[63];let er=g;_[64]!==$||_[65]!==I||_[66]!==N||_[67]!==J||_[68]!==A?(y={url:N,action:$,pageReference:I,sendTireFinderParams:A,openPromotionModal:J},_[64]=$,_[65]=I,_[66]=N,_[67]=J,_[68]=A,_[69]=y):y=_[69];let en=(0,p.useClickWithTireFinderParams)(y);_[70]!==S||_[71]!==O||_[72]!==F||_[73]!==J||_[74]!==P?(T={url:F,action:S,pageReference:O,sendTireFinderParams:P,openPromotionModal:J},_[70]=S,_[71]=O,_[72]=F,_[73]=J,_[74]=P,_[75]=T):T=_[75];let el=(0,p.useClickWithTireFinderParams)(T);return _[76]!==en||_[77]!==el||_[78]!==er?(C=(0,t.jsx)(d,{...er,onHandleButtonClick:en,onHandleLinkClick:el}),_[76]=en,_[77]=el,_[78]=er,_[79]=C):C=_[79],_[80]!==X||_[81]!==C?(k=(0,t.jsxs)(t.Fragment,{children:[C,X]}),_[80]=X,_[81]=C,_[82]=k):k=_[82],k});e.s(["default",0,g],705527)},718059,e=>{"use strict";e.s([],299968),e.i(299968);var t=e.i(705527);e.s(["ContentCard",()=>t.default,"default",()=>t.default],718059)},395110,e=>{e.n(e.i(718059))}]);