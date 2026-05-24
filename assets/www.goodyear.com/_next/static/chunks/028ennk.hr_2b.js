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
`,l=`
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
`,m=`
  ... on FormSectionModel {
    _path
    __typename
    headline
    sectionFields {
      ${i}
      ${n}
      ${s}
      ${l}
      ${o}
      ${r}
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
            ${s}
            ${m}
            ${l}
            ${o}
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
`;var c=e.i(715351),u=e.i(855336);let p=async({brand:e,pageName:t,localeCountry:a,lob:i,region:l},r)=>(0,u.graphqlService)({query:d,variables:{brand:e,pageName:t,localeCountry:a,lob:i,region:l},extraHeaders:{usid:r}}),h=({brand:e,pageName:t,localeCountry:a,lob:i,region:l})=>(0,c.graphqlClientProxy)({moduleName:"formQueries",queryName:"executeFormsQuery",payload:{brand:e,pageName:t,localeCountry:a,lob:i,region:l}}),f=async(e,t,i={})=>(0,u.graphqlService)({query:a,variables:e,extraHeaders:{...t?{usid:t}:{},...i}}),g=e=>{let{csrfToken:t,...a}=e;return(0,c.graphqlClientProxy)({moduleName:"formQueries",queryName:"executeFormSubmissionMutation",payload:a,csrfToken:t,formId:e.formId})};e.s(["executeFormSubmissionMutation",0,f,"executeFormsQuery",0,p,"fetchFormContent",0,h,"fetchFormContentQuery",0,({brand:e,pageName:a,localeCountry:i,lob:l,region:r})=>(0,t.queryOptions)({queryKey:["fetch-form",a],queryFn:async()=>h({brand:e,pageName:a,localeCountry:i,lob:l,region:r})}),"submitForm",0,g,"submitFormMutation",0,()=>({mutationKey:["form-submission"],mutationFn:async e=>g(e)})],612024)},119553,e=>{"use strict";var t=e.i(294718),a=e.i(277030),i=e.i(750987),l=e.i(18670),r=e.i(293769),n=e.i(611947),o=e.i(11201),s=e.i(862911),m=e.i(565904),d=e.i(371981),c=e.i(17404),u=e.i(612024),p=e.i(211241),h=e.i(864585),f=e.i(335073),g=e.i(470069),x=e.i(79486),y=e.i(937588),b=e.i(655127),T=e.i(420896),k=e.i(925732),C=e.i(457455),F=e.i(707691);e.s(["useClickWithTireFinderParams",0,({url:e,action:_,openPromotionModal:N,sendTireFinderParams:S,pageReference:$})=>{let P,w,I,{open:v}=(0,i.useTireFinderFlyout)(),A=(0,m.default)("fetch-form"),{brand:R,lob:j,locale_country:L}=(0,s.useSiteInfo)(),q=(0,k.getTireFinderData)(),E=q?.userQualificationStatus===1,M=(w=(0,r.c)(2),I=(0,o.useRouter)(),w[0]!==I?(P=(e,t)=>{if(!e||!t||t===n.ClickActionType.NONE||t===n.ClickActionType.FLYOUT||t===n.ClickActionType.POPUP||t===n.ClickActionType.OFFER_MODAL)return;let a=e.trim();if(!a)return;let i=a.startsWith("http://")||a.startsWith("https://");t===n.ClickActionType.NEW_TAB?window.open(a,"_blank","noopener,noreferrer"):t===n.ClickActionType.SAME_TAB&&(i?window.location.href=a:I.push(a))},w[0]=I,w[1]=P):P=w[1],P),D=(0,T.useRef)(null),O=(0,C.getClientCookie)(t.CookieKeys.SelectedStore)?.storeId??null,B=(0,g.useModalStore)(e=>e.setIsOpen),U=(0,f.useFlyoutStore)(e=>e.setIsOpen),Q=(0,f.useFlyoutStore)(e=>e.setBodyContent),W=(0,g.useModalStore)(e=>e.setModalPageName),H=(0,f.useFlyoutStore)(e=>e.setHeaderContent),V=(0,y.getQueryParamsFromUrl)(q?.tireFinderURL??""),Y=(0,a.useI18n)(n.i18nModels.PRODUCT_DETAILS_MODEL),[z,G]=(0,T.useState)(!1),K=(0,T.useMemo)(()=>(0,y.buildUrlWithQueryParams)(e??"",{...V,storeId:O}),[V,O]),J=(0,T.useCallback)(e=>{if(!e?.__typename)return null;let t=(0,h.getComponentByID)(e.__typename);if(!t)return null;let a=(0,h.getEditableComponent)(e.__typename,t),i={customClassNames:{grid:"w-full ",form:"flex flex-col gap-8",fieldWrapper:"grid grid-cols-12 w-full gap-8",globalErrorMessage:"mb-2",gapBetweenElement:"gap-6"},...e};return T.default.createElement(a,i)},[]),X=(0,T.useCallback)(e=>T.default.createElement("div",{className:"flex flex-col gap-1"},T.default.createElement(c.Text,{variant:"subtitle-xl",tag:"h2"},e?.headline),(0,l.renderDescription)(e?.description)),[]),Z=(0,T.useCallback)(async e=>{try{let t={brand:R,lob:j,localeCountry:(0,y.formatLocale)(L),region:(0,x.getRegionFromLocale)(L),pageName:e},a=await A.fetchQuery((0,u.fetchFormContentQuery)(t)),i=a?.getFormByPath?.data?.item;if(i){let e={headline:i?.headline,description:i?.description},t={...i,headline:"",description:""},a=X(e),l=J(t);a&&H(a),l&&Q(l)}}catch(e){Q(null),H(null)}finally{G(!1)}},[R,L,j,Q,H,J,X,A]),ee=(0,T.useCallback)(async e=>{G(!0);try{let t=await (0,p.fetchPromotionDetails)({ids:[e]}),a=t?.getPromotionDetails?.data?.data?.[0]||null,{contentBody:i,contentHeading:l}=(0,F.getPromotionContent)(z,a,Y);Q(i),H(l)}catch(a){let{contentBody:e,contentHeading:t}=(0,F.getPromotionContent)(!1,null,Y);Q(e),H(t)}finally{G(!1)}},[Y]);return(0,T.useCallback)(async t=>{if(t&&"preventDefault"in t&&t.preventDefault(),_===n.ClickActionType.FLYOUT){let t=$?._path,a=$?.__typename;if("#vehicleTF"===e||"#tireSizeTF"===e)return void v(D,q?.selectorType);if("#newsletterForm"===e)return void U(!0);if(e?.toLowerCase().includes("#offer|")){let t=e?.replace(/#offer\|/i,"")||"",{contentBody:a,contentHeading:i}=(0,F.getPromotionContent)(!0,null,Y);Q(a),H(i),U(!0),ee(t);return}t&&"FormContainerModel"===a&&(G(!0),Q(T.default.createElement("div",{className:"flex items-center justify-center h-32 w-full"},T.default.createElement(d.Loader))),U(!0),await Z(t))}if(_===n.ClickActionType.POPUP){let e=$?._path;if(e){let t=(0,b.resolveUrl)(e);if(t.includes(`/${L}`)){let e=t.split(`/${L}`)[1];e?.startsWith("/modals/")||e?.startsWith("modals/")?W(t.replace(RegExp(`/${L}/modals`),"modals")):W(t.replace(`/${L}`,"pages"))}else W(e);B(!0);return}}if(_===n.ClickActionType.OFFER_MODAL)if(e?.toLowerCase().includes("#offer|")){let t=e?.replace(/#offer\|/i,"")||"";N?.(t)}else N?.(e||"");if(!e)return void M(null,_);let a=(0,b.resolveUrl)(e);if(a.includes("#")&&_===n.ClickActionType.SAME_TAB){let e=a.indexOf("#"),t=a.slice(e+1);if(document.getElementById(t)){let t=a.slice(e);if(globalThis.location.hash===t){let e=`${globalThis.location.pathname}${globalThis.location.search}`;globalThis.history.replaceState?.(null,"",e),setTimeout(()=>{globalThis.history.replaceState?.(null,"",t)},0)}else globalThis.history.pushState?.(null,"",t);return}}S&&E&&O&&_!==n.ClickActionType.NONE?M((0,b.resolveUrl)(K),_):M((0,b.resolveUrl)(e),_)},[_,e,v,M,S,E,K,q?.selectorType,Y,ee,Z])}],119553)},263570,e=>{"use strict";e.s([],890840),e.i(890840);var t=e.i(901538),a=e.i(293769),i=e.i(861117),l=e.i(47887),r=e.i(952462),n=e.i(544979),o=e.i(611947),s=e.i(154346),m=e.i(926750),d=e.i(739751),c=e.i(17404),u=e.i(264458),p=e.i(420896);let h=(0,p.memo)(({quotationText:e,authorName:a,authorRole:i,onDark:l=!1,showQuoteIcon:r=!0,baseQaId:n})=>{let o=(0,u.default)("flex flex-row gap-4",l?"text-type-standard-on-dark":"text-type-standard");return(0,t.jsx)("blockquote",{"aria-label":"Quotation",role:"blockquote","data-qa-id":n,children:(0,t.jsxs)("div",{className:o,tabIndex:0,children:[r?(0,t.jsxs)(t.Fragment,{children:[(0,t.jsx)(d.Icon,{name:"quote-marks",size:"lg",className:"block xl:hidden",addPadding:!1}),(0,t.jsx)(d.Icon,{name:"quote-marks",size:"xl",className:"hidden xl:block",addPadding:!1})]}):null,(0,t.jsxs)("div",{className:"flex flex-col gap-2",children:[(0,t.jsx)(c.Text,{tag:"h2",variant:"heading-sm","data-qa-id":n?`${n}-quotation`:void 0,children:e}),(0,t.jsxs)("div",{className:"flex flex-col",children:[(0,t.jsx)(c.Text,{tag:"p",variant:"paragraph-md","data-qa-id":n?`${n}-author-name`:void 0,children:a}),(0,t.jsx)(c.Text,{tag:"p",variant:"paragraph-md","data-qa-id":n?`${n}-author-role`:void 0,children:i})]})]})]})})});h.displayName="PullQuote";var f=e.i(195988),g=e.i(356721);let x=(0,p.memo)(({headline:e,headingTag:a,description:i,bannerType:l="simpleBanner",bannerStyle:r="leftAlignedText",image:n,className:o,baseQaId:d,onDark:x,onHandleButtonClick:y,componentWidth:b="pageWidth",onHandleLinkClick:T,isFullWidth:k,buttonTracking:C,linkTracking:F,authorName:_,authorRole:N,...S})=>{let $,P=x?"dark":"light",w="smallImageLeft"===r,I="smallImageRight"===r,v="largeImageLeft"===r,A="centerAlignedText"===r,R="pullQuote"===l,j="legalBanner"===l,L=!!n?.image?._publishUrl&&!A&&"leftAlignedText"!==r,q=w||I,E=v||"largeImageRight"===r,M=(0,u.default)("flex flex-col gap-2 col-span-12 text-type-standard max-w-[var(--breakpoint-container-max-width)] mx-auto"),D=(0,u.default)(o,"w-full rounded-2xl bg-background-100",{"overflow-hidden":L,"flex flex-col sm:flex-row items-center":E,"flex flex-col sm:flex-row items-center gap-8 sm:gap-10 md:gap-12":q,"p-6 sm:p-10 md:p-12 xl:px-24":!E,"sm:px-8 sm:py-10":q,"p-0":E,"bg-background-800 text-type-standard-on-dark":x,"bg-background-primary text-type-standard-on-dark":j&&x}),O=(0,u.default)("flex-1 flex flex-col gap-4",{"text-center":A,"text-left":!A,"w-full p-6 sm:p-6 md:p-10 lg:p-12":E,"sm:order-2":w,"sm:order-1":I}),B=(0,u.default)({"self-start sm:self-center w-[112px] h-[112px] flex-shrink-0":q,"rounded-full overflow-hidden":q&&R,"w-full self-stretch h-[250px] sm:h-auto sm:w-[224px] md:w-[306px] lg:w-[353px] xl:w-[422px] xxl:w-[580px] flex-shrink-0":E,"sm:order-1":w,"sm:order-2":I}),U=(0,p.useMemo)(()=>"string"==typeof i?(0,t.jsx)("div",{className:"text-right",children:(0,t.jsx)(c.Text,{theme:P,className:"normal-case!",variant:"paragraph-xs",tag:"p",children:i})}):i&&"object"==typeof i&&"html"in i&&i.html?(0,t.jsx)("div",{className:"text-right",children:(0,t.jsx)(f.RichText,{theme:P,html:i.html,pVariant:"paragraph-xs"})}):null,[i,P]),Q=()=>(0,t.jsx)("div",{className:O,children:R?(0,t.jsx)(h,{quotationText:e,onDark:x,showQuoteIcon:!L,authorName:_,authorRole:N}):(0,t.jsx)(s.ContentBlock,{...S,onDark:x,headline:e,headingTag:a,baseQaId:d,description:i,accessibilityLabel:"",alignment:A?"center":"left",titleStyle:j?"display":"subtitle",textSize:j?"medium":"extraLarge",onHandleButtonClick:y,onHandleLinkClick:T,buttonTracking:C,linkTracking:F})}),W=()=>L?(0,t.jsx)("div",{className:B,children:(0,t.jsx)(m.Image,{as:"img",src:n?.image?._publishUrl||"",alt:n?.altText||n?.caption||"",className:"w-full h-full object-cover",responsiveImage:!0,imageProfile:E?"banner-large":"banner-small"})}):null;$=E?v?(0,t.jsxs)(t.Fragment,{children:[W(),Q()]}):(0,t.jsxs)(t.Fragment,{children:[Q(),W()]}):(0,t.jsxs)(t.Fragment,{children:[W(),Q()]});let H=k?"w-full px-4 sm:px-6 md:px-0":(0,g.authorableOuterGrid)({componentWidth:b});return(0,t.jsx)("div",{className:H,children:(0,t.jsx)("div",{className:(0,u.default)((0,g.componentWidthVariants)({componentWidth:b}),k&&"w-full"),children:(0,t.jsxs)("div",{className:M,children:[(0,t.jsx)("div",{"data-qa-id":`${d}-${l}`,className:D,children:$}),R&&U]})})})});x.displayName="Banner";var y=e.i(119553),b=e.i(707691),T=e.i(972919),k=e.i(100138),C=e.i(673678),F=e.i(922898),_=e.i(846627);let N=(0,p.memo)(e=>{let s,m,d,c,u,p,h,f,g,N,w,I,v=(0,a.c)(54),A=(0,l.useGenerateTestId)(o.i18nModels.BANNER),R=(0,l.useWithParentRegion)(),{buttonLabel:j,buttonAction:L,buttonUrl:q,buttonReferencePath:E,tireFinderParamsForButton:M,linkLabel:D,linkUrl:O,linkAction:B,linkReferencePath:U,tireFinderParamsForLink:Q,headline:W,onDark:H,alignment:V,tagLabel:Y,tracking:z,onHandleLinkClick:G,onHandleButtonClick:K}=e,J=(0,r.useSitePreferences)();v[0]!==J?(s=J.getPreferences(o.sitePreferencesModel.APPOINTMENT_CONSULTATION_SERVICE_ID)??"",v[0]=J,v[1]=s):s=v[1];let X=s,Z=(0,T.useQuickViewStore)(S),ee=(0,T.useQuickViewStore)($),et=(0,T.useQuickViewStore)(P),{handleAddToCart:ea}=(0,n.default)(!1),{openPromotionModal:ei,PromotionDetailsModal:el}=(0,b.usePromotionDetails)();v[2]!==L||v[3]!==E||v[4]!==q||v[5]!==ei||v[6]!==M?(m={url:q,action:L,pageReference:E,sendTireFinderParams:M,openPromotionModal:ei},v[2]=L,v[3]=E,v[4]=q,v[5]=ei,v[6]=M,v[7]=m):m=v[7];let er=(0,y.useClickWithTireFinderParams)(m);v[8]!==B||v[9]!==U||v[10]!==O||v[11]!==ei||v[12]!==Q?(d={url:O,action:B,pageReference:U,sendTireFinderParams:Q,openPromotionModal:ei},v[8]=B,v[9]=U,v[10]=O,v[11]=ei,v[12]=Q,v[13]=d):d=v[13];let en=(0,y.useClickWithTireFinderParams)(d);v[14]!==X||v[15]!==er||v[16]!==j||v[17]!==ea||v[18]!==Z||v[19]!==et?(c=async()=>{if(j?.toLowerCase().includes(o.freeConsultation)){await ea(X),et(!0),Z(!0);return}er()},v[14]=X,v[15]=er,v[16]=j,v[17]=ea,v[18]=Z,v[19]=et,v[20]=c):c=v[20];let eo=c,es=H?"dark":"light",em=V?`${V}-${es}`:es;v[21]!==R||v[22]!==em?(u=(0,k.buildComponentName)(R,em),v[21]=R,v[22]=em,v[23]=u):u=v[23];let ed=u;v[24]!==ed||v[25]!==W||v[26]!==Y||v[27]!==z?(p=(e,t,a,l)=>e?(0,k.createLinkTracking)({name:(0,k.buildCTAName)(i.COMPONENT_TYPES.BANNER,W??"",e??""),componentType:i.COMPONENT_TYPES.BANNER,componentName:ed,url:t||"",componentElement:l,isExternal:"newTab"===a,...Y&&{componentBadge:Y},additionalData:{...z}}):null,v[24]=ed,v[25]=W,v[26]=Y,v[27]=z,v[28]=p):p=v[28];let ec=p,eu=j??"",ep=q??"",eh=L??"";v[29]!==ec||v[30]!==eu||v[31]!==ep||v[32]!==eh?(h=ec(eu,ep,eh,"button"),v[29]=ec,v[30]=eu,v[31]=ep,v[32]=eh,v[33]=h):h=v[33];let ef=h,eg=D??"",ex=O??"",ey=B??"";v[34]!==ec||v[35]!==eg||v[36]!==ex||v[37]!==ey?(f=ec(eg,ex,ey,"link"),v[34]=ec,v[35]=eg,v[36]=ex,v[37]=ey,v[38]=f):f=v[38];let eb=f,eT=G??en,ek=K??eo;v[39]!==A||v[40]!==ef||v[41]!==eb||v[42]!==e||v[43]!==eT||v[44]!==ek?(g={...e,baseQaId:A,onHandleLinkClick:eT,onHandleButtonClick:ek,buttonTracking:ef,linkTracking:eb},v[39]=A,v[40]=ef,v[41]=eb,v[42]=e,v[43]=eT,v[44]=ek,v[45]=g):g=v[45];let eC=g;return v[46]!==ee?(N=ee&&(0,t.jsx)(F.default,{componentName:"Quick View",children:(0,t.jsx)(_.default,{})}),v[46]=ee,v[47]=N):N=v[47],v[48]!==eC?(w=(0,t.jsx)(C.default,{children:(0,t.jsx)(x,{...eC})}),v[48]=eC,v[49]=w):w=v[49],v[50]!==el||v[51]!==N||v[52]!==w?(I=(0,t.jsxs)(t.Fragment,{children:[N,w,el]}),v[50]=el,v[51]=N,v[52]=w,v[53]=I):I=v[53],I});function S(e){return e.setIsConsultationProduct}function $(e){return e.isConsultationProduct}function P(e){return e.setQuickViewOpen}e.s(["Banner",0,N,"default",0,N],263570)}]);