<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Installation - {{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ config('installer.icon') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    *,:after,:before{
        box-sizing:border-box;
        border:0 solid #e5e7eb
    }
    :after,:before{
        --tw-content:""
    }
    html{
        line-height:1.5;
        -webkit-text-size-adjust:100%;
        -moz-tab-size:4;
        -o-tab-size:4;
        tab-size:4;
        font-family:ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
        font-feature-settings:normal;
        font-variation-settings:normal
    }
    body{
        margin:0;
        line-height:inherit
    }
    hr{
        height:0;
        color:inherit;
        border-top-width:1px
    }
    abbr:where([title]){
        -webkit-text-decoration:underline dotted;
        text-decoration:underline dotted
    }
    h1,h2,h3,h4,h5,h6{
        font-size:inherit;
        font-weight:inherit
    }
    a{
        color:inherit;
        text-decoration:inherit
    }
    b,strong{
        font-weight:bolder
    }
    code,kbd,pre,samp{
        font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;
        font-size:1em
    }
    small{
        font-size:80%
    }
    sub,sup{
        font-size:75%;
        line-height:0;
        position:relative;
        vertical-align:initial
    }
    sub{
        bottom:-.25em
    }
    sup{
        top:-.5em
    }
    table{
        text-indent:0;
        border-color:inherit;
        border-collapse:collapse
    }
    button,input,optgroup,select,textarea{
        font-family:inherit;
        font-feature-settings:inherit;
        font-variation-settings:inherit;
        font-size:100%;
        font-weight:inherit;
        line-height:inherit;
        color:inherit;
        margin:0;
        padding:0
    }
    button,select{
        text-transform:none
    }
    [type=button],[type=reset],[type=submit],button{
        -webkit-appearance:button;
        background-color:initial;
        background-image:none
    }
    :-moz-focusring{
        outline:auto
    }
    :-moz-ui-invalid{
        box-shadow:none
    }
    progress{
        vertical-align:initial
    }
    ::-webkit-inner-spin-button,::-webkit-outer-spin-button{
        height:auto
    }
    [type=search]{
        -webkit-appearance:textfield;
        outline-offset:-2px
    }
    ::-webkit-search-decoration{
        -webkit-appearance:none
    }
    ::-webkit-file-upload-button{
        -webkit-appearance:button;
        font:inherit
    }
    summary{
        display:list-item
    }
    blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{
        margin:0
    }
    fieldset{
        margin:0
    }
    fieldset,legend{
        padding:0
    }
    menu,ol,ul{
        list-style:none;
        margin:0;
        padding:0
    }
    dialog{
        padding:0
    }
    textarea{
        resize:vertical
    }
    input::-moz-placeholder,textarea::-moz-placeholder{
        opacity:1;
        color:#9ca3af
    }
    input::placeholder,textarea::placeholder{
        opacity:1;
        color:#9ca3af
    }
    [role=button],button{
        cursor:pointer
    }
    :disabled{
        cursor:default
    }
    audio,canvas,embed,iframe,img,object,svg,video{
        display:block;
        vertical-align:middle
    }
    img,video{
        max-width:100%;
        height:auto
    }
    [hidden]{
        display:none
    }
    *,::backdrop,:after,:before{
        --tw-border-spacing-x:0;
        --tw-border-spacing-y:0;
        --tw-translate-x:0;
        --tw-translate-y:0;
        --tw-rotate:0;
        --tw-skew-x:0;
        --tw-skew-y:0;
        --tw-scale-x:1;
        --tw-scale-y:1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness:proximity;
        --tw-gradient-from-position: ;
        --tw-gradient-via-position: ;
        --tw-gradient-to-position: ;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width:0px;
        --tw-ring-offset-color:#fff;
        --tw-ring-color:#3b82f680;
        --tw-ring-offset-shadow:0 0 #0000;
        --tw-ring-shadow:0 0 #0000;
        --tw-shadow:0 0 #0000;
        --tw-shadow-colored:0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: 
    }
    .float-right{
        float:right
    }
    .m-auto{
        margin:auto
    }
    .mx-auto{
        margin-left:auto;
        margin-right:auto
    }
    .mb-3{
        margin-bottom:.75rem
    }
    .mb-4{
        margin-bottom:1rem
    }
    .mb-6{
        margin-bottom:1.5rem
    }
    .ml-3{
        margin-left:.75rem
    }
    .block{
        display:block
    }
    .flex{
        display:flex
    }
    .inline-flex{
        display:inline-flex
    }
    .grid{
        display:grid
    }
    .h-12{
        height:3rem
    }
    .h-5{
        height:1.25rem
    }
    .h-6{
        height:1.5rem
    }
    .h-full{
        height:100%
    }
    .min-h-screen{
        min-height:100vh
    }
    .w-5{
        width:1.25rem
    }
    .w-6{
        width:1.5rem
    }
    .w-\[64rem\]{
        width:64rem
    }
    .w-full{
        width:100%
    }
    .max-w-5xl{
        max-width:64rem
    }
    .flex-shrink-0{
        flex-shrink:0
    }
    .list-inside{
        list-style-position:inside
    }
    .list-decimal{
        list-style-type:decimal
    }
    .appearance-none{
        -webkit-appearance:none;
        -moz-appearance:none;
        appearance:none
    }
    .grid-cols-2{
        grid-template-columns:repeat(2,minmax(0,1fr))
    }
    .flex-wrap{
        flex-wrap:wrap
    }
    .items-center{
        align-items:center
    }
    .justify-end{
        justify-content:flex-end
    }
    .justify-center{
        justify-content:center
    }
    .gap-4{
        gap:1rem
    }
    .divide-y>:not([hidden])~:not([hidden]){
        --tw-divide-y-reverse:0;
        border-top-width:calc(1px*(1 - var(--tw-divide-y-reverse)));
        border-bottom-width:calc(1px*var(--tw-divide-y-reverse))
    }
    .rounded{
        border-radius:.25rem
    }
    .rounded-md{
        border-radius:.375rem
    }
    .border{
        border-width:1px
    }
    .border-b{
        border-bottom-width:1px
    }
    .border-l-4{
        border-left-width:4px
    }
    .border-gray-200{
        --tw-border-opacity:1;
        border-color:rgb(229 231 235/var(--tw-border-opacity))
    }
    .border-green-500{
        --tw-border-opacity:1;
        border-color:rgb(34 197 94/var(--tw-border-opacity))
    }
    .border-red-500{
        --tw-border-opacity:1;
        border-color:rgb(239 68 68/var(--tw-border-opacity))
    }
    .bg-blue-500{
        --tw-bg-opacity:1;
        background-color:rgb(59 130 246/var(--tw-bg-opacity))
    }
    .bg-green-100{
        --tw-bg-opacity:1;
        background-color:rgb(220 252 231/var(--tw-bg-opacity))
    }
    .bg-red-100{
        --tw-bg-opacity:1;
        background-color:rgb(254 226 226/var(--tw-bg-opacity))
    }
    .bg-red-500{
        --tw-bg-opacity:1;
        background-color:rgb(239 68 68/var(--tw-bg-opacity))
    }
    .bg-white{
        --tw-bg-opacity:1;
        background-color:rgb(255 255 255/var(--tw-bg-opacity))
    }
    .bg-cover{
        background-size:cover
    }
    .bg-center{
        background-position:50%
    }
    .bg-no-repeat{
        background-repeat:no-repeat
    }
    .fill-current{
        fill:currentColor
    }
    .p-4{
        padding:1rem
    }
    .px-3{
        padding-left:.75rem;
        padding-right:.75rem
    }
    .px-4{
        padding-left:1rem;
        padding-right:1rem
    }
    .py-12{
        padding-top:3rem;
        padding-bottom:3rem
    }
    .py-2{
        padding-top:.5rem;
        padding-bottom:.5rem
    }
    .py-5{
        padding-top:1.25rem;
        padding-bottom:1.25rem
    }
    .py-8{
        padding-top:2rem;
        padding-bottom:2rem
    }
    .pb-2{
        padding-bottom:.5rem
    }
    .pb-3{
        padding-bottom:.75rem
    }
    .pb-4{
        padding-bottom:1rem
    }
    .pl-6{
        padding-left:1.5rem
    }
    .text-2xl{
        font-size:1.5rem;
        line-height:2rem
    }
    .text-sm{
        font-size:.875rem;
        line-height:1.25rem
    }
    .font-bold{
        font-weight:700
    }
    .font-medium{
        font-weight:500
    }
    .uppercase{
        text-transform:uppercase
    }
    .leading-5{
        line-height:1.25rem
    }
    .leading-tight{
        line-height:1.25
    }
    .text-blue-500{
        --tw-text-opacity:1;
        color:rgb(59 130 246/var(--tw-text-opacity))
    }
    .text-gray-700{
        --tw-text-opacity:1;
        color:rgb(55 65 81/var(--tw-text-opacity))
    }
    .text-gray-800{
        --tw-text-opacity:1;
        color:rgb(31 41 55/var(--tw-text-opacity))
    }
    .text-green-500{
        --tw-text-opacity:1;
        color:rgb(34 197 94/var(--tw-text-opacity))
    }
    .text-green-600{
        --tw-text-opacity:1;
        color:rgb(22 163 74/var(--tw-text-opacity))
    }
    .text-green-700{
        --tw-text-opacity:1;
        color:rgb(21 128 61/var(--tw-text-opacity))
    }
    .text-red-400{
        --tw-text-opacity:1;
        color:rgb(248 113 113/var(--tw-text-opacity))
    }
    .text-red-500{
        --tw-text-opacity:1;
        color:rgb(239 68 68/var(--tw-text-opacity))
    }
    .text-red-600{
        --tw-text-opacity:1;
        color:rgb(220 38 38/var(--tw-text-opacity))
    }
    .text-red-700{
        --tw-text-opacity:1;
        color:rgb(185 28 28/var(--tw-text-opacity))
    }
    .text-white{
        --tw-text-opacity:1;
        color:rgb(255 255 255/var(--tw-text-opacity))
    }
    .shadow{
        --tw-shadow:0 1px 3px 0 #0000001a,0 1px 2px -1px #0000001a;
        --tw-shadow-colored:0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color);
        box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)
    }
    .hover\:bg-blue-700:hover{
        --tw-bg-opacity:1;
        background-color:rgb(29 78 216/var(--tw-bg-opacity))
    }
    .hover\:bg-red-700:hover{
        --tw-bg-opacity:1;
        background-color:rgb(185 28 28/var(--tw-bg-opacity))
    }
    .hover\:underline:hover{
        text-decoration-line:underline
    }
    .focus\:outline-none:focus{
        outline:2px solid #0000;
        outline-offset:2px
    }
    @media (min-width:640px){
        .sm\:rounded-lg{
            border-radius:.5rem
        }
        .sm\:px-12{
            padding-left:3rem;
            padding-right:3rem
        }
        .sm\:px-6{
            padding-left:1.5rem;
            padding-right:1.5rem
        }
    }
    </style>
</head>
<body class="min-h-screen h-full w-full bg-cover bg-no-repeat bg-center flex" style="background-image: url('{{ config('installer.background') }}');">
<div class="py-12 sm:px-12 w-full max-w-5xl m-auto">
    <div class="w-full bg-white shadow sm:rounded-lg">
        <div class="px-4 py-8 border-b border-gray-200 sm:px-6">
            <div class="flex justify-center items-center">
                <h2 class="pl-6 uppercase font-medium text-2xl text-gray-800">{{ config('app.name', 'Laravel') }} Installation</h2>
            </div>
        </div>
        <div class="px-4 py-5 sm:px-6 w-full">
            @yield('step')
        </div>
    </div>
</div>
</body>
</html>
