# Technoscape 2023

Rise up to Technoscape 2023. There would be a bunch of experience made in this year. And of course, a bunch of homeworks to be solved, a.k.a. features and bugs. So, keep brave yourself, stay curious, and ask for help. And Fighting!

## Setting Up

To make web developing easier, we would do basic life skills of developers, copying and pasting. And of course, using another developer's modules to patch everything up, and well using every solved questions popping in stackoverflow. In conclusion... don't be shy to add something else not listed here... or using another thing we may never know. Suprise us.

So here is the list...

**Backbone**
- W3C HTML5 Standard

**Styling Modules**
- Postcss
- Tailwind
```html
<link href="/css/base/build.css" rel="stylesheet">
```

**Logic Modules**
- jQuery 3.6 (Google CDN)
```html
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
```

- ES6 Module Polyfill using ES Module Shim
```html
<script async src="https://ga.jspm.io/npm:es-module-shims@1.4.3/dist/es-module-shims.js"></script>
```

- ESM Tween.JS
```js
import TWEEN from 'https://unpkg.com/@tweenjs/tween.js@18.6.4/dist/tween.esm.js';
```

**3D Asset**
- ThreeJS v0.136.0
- [Postprocessing](https://github.com/vanruesc/postprocessing) v6.23.5 by vanruesc

```js
import * as THREE from 'three';
import { GLTFLoader } from 'https://unpkg.com/three@0.136.0/examples/jsm/loaders/GLTFLoader.js';
import * as postprocessing from 'https://cdn.jsdelivr.net/npm/postprocessing@6.23.5/build/postprocessing.esm.js';
```

- Model Viewer: https://modelviewer.dev/


*P.s. We would use postcss as css preprocessor. As long as CDN exists, please use it first. Put everything on server would be hard. Also, don't forget to update this document if you use any CDN not listed above.* \
*P.s. List of CDN could be found in the notes at the end of this documentation.* \
*P.s. 3D Asset modules will follow DnD creativity.*

## Installation

These installation are need for testing, preview, and QA test. If you use Node Modules, Composer, Choco, or any package manager out there, do not hesitate to put your guidance here.

**Node Modules**
This project is using Tailwind and Postcss. To start building the css, please install it first.

1. Install [NodeJS and NPM](https://nodejs.org/en/download/)
2. Run this command
```bash
npm install
```

**Liveserver**

1. Install [Live server](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer) extension to VS Code.
2. Run it by clicking "Go Live" from the status bar.

**Ngrok**

1. Download [Ngrok](https://ngrok.com/download)
2. Sign up or Sign in your self in Ngrok site.
3. Open terminal/bash/command prompt and connect your accout by adding your authtoken

```bash
$ cd /route/to/unzipped/node
$ ./ngrok authtoken <token>
```

4. Run it with `ngrok http <port>`

## Running Up

**Building the Tailwind**

There are 2 ways to build the Tailwind, those are final compiled, and precompiled.

For final compiled or running the build once or production mode, you could run this in terminal.

```bash
npm run build
```

The precompiled means it would watch the file and would rebuild if you add something to the file. This called Live Edit. To do so, run the command below

```bash
npm run watch
```

Please keep in your mind those commands above would ONLY compile `postcss/base.css` to be `css/build.css`. It means, you must consider how you rename the ids and classes so it wouldn't conflict with any pages. This would be explained more in standarization.

**Serving**

When you want to test the site you have been made, just click "Go Live" from the right-bottom corner of VS Code's status bar.

After that, you may want to preview your site online. You could use `ngrok` to forward it from your localhost to internet. This thing called `tunneling` (hope you could understand). To run it, just do...

```bash
# format
$ ngrok http <port>

# example
$ ngrok http 8000
```

## Program Workflow

We already have functional requirement document (FRD) which would be your base in build the web. Please read this first: \
https://docs.google.com/document/d/1EHvv8X8cDJaF9uN81NnpvOlQRwariQEPcWFoWMdmb9Y/edit?usp=sharing

In developing the web, you would put full of your attention to the design. We would using Figma to make everything easier. Here is the link: \
https://www.figma.com/file/AiWdCnxikaS2t1Xh5grVjQ/TechnoScape-2023-Website?node-id=0%3A1&t=knyoTXn3DeFRjluf-1

The frontend need to be intgrated to backend for fully functionally use. Usually, backend dev would integrate everything in MVC model. Afterthat, frontend dev could start patching the HTML directly from the backend environtment. Guidance for integration could be found in their repository. Here is it... \
https://github.com/RnDBNCC/TechnoScape2023-BE

*You may not be informed when the design, content, or FRD updated. That's why you must put your attention to each document... or you just ask your friends who are DnD, Event, or Publication. Communication is the key!*

*Oh, hey! You could also ask us too...*

## Semantic and Standarization

**Folder Structure**

```css
public
\_ assets
    \_ 3d
        \_ halo-black.glb
    \_ coming-soon
        \_ iora.svg
    \_ logo
        \_ technoscape-logo.svg
    \_ sponsor
        \_ netsky-512.png
        \_ carbon-64.webp
    \_ medpar
        \_ filemagz.png
    \_ medsos
        \_ facebook.svg
        \_ instagram.svg
    \_ navbar
        \_ home.svg
        \_ back.svg
        \_ key.svg
    \_ hackathon
        \_ trophy-1.svg
        \_ trophy-2.svg
\_ css
    \_ base
        \_ base.css
        \_ build.css
    \_ coming-soon.css
    \_ hackathon.css
\_ fonts
    \_ ABigDeal
        \_ aBigDeal.ttf
    \_ YouTubeSans
        \_ YouTubeSansDarkBold.otf
\_ js
    \_ base
        \_ halo-iora.js
    \_ coming-soon.js
    \_ hackathon.js
\_ index.html
\_ login.html
\_ register.html
src
\_ base.css
```

**Semantic Branching**
```bash
# format
<type>/<feature-title>/<sub-title>

# example
page/coming-soon/responsive-mobile
feature/register
hotfix/register/password-validation

page/home
section/home/about-us
```

`<type>`: main, page, section, test, stable, release, experimental, hotfix, bugfix, feature, chore

**Semantic Committing & Merging**

```bash
# format
[<status>](<scope>) <section-name|page-name>: <changes description>
[<status>] <section-name|page-name>: <changes description>
<status|scope>: <changes description>

# example
[add](feat) about-us in home: put assets and give styling to about us
feat: put assets and give styling to about us
[fix] register: fix password validation logic 
```

`<status>`: init, add, patch, enable, disable, fix, bugfix, hotfix refactor, remove, merge. \
`<scope>` : test, doc, conflict, feat, section, mixed \
`<scope>` (FE): api, page, section, style, asset, util, logic, modules, etc.

**CSS Naming Standarization**

```css
/* this rule will effect in every size of device. */
div#id-for-only-one-element .mainFunction-subFeature-subFeature{
    /* ... */
}

/* this rule will effect for desktop size. 
   sometimes we could ignore this rules and 
   hope it would do the same thing as larger 
   screen. Just be remind you would develop
   the websites in 1280x768. */
@media only screen and (max-width:1280){
    /* ... */
}

/* this rule will effect for tablet size */
@media only screen and (max-width:768){
    /* ... */
}

/* this rule will effect for mobile size */
@media only screen and (max-width:320){
    /* ... */
}

/* if there are some condition which cannot be meet
   in every case of media rules above, you could
   add your own. */
@media only screen and (max-width:673){
    /* ...  */
}
```

REMEMBER! The latest rules stated in css would overide every rules above it.

**Works with Tailwind**

Tailwind is utility-first css frameworks which provide modern browser feature. We could make our own css in more simple way. In the sametime, we would using it with postcss as preprocessor and extend its functionality. First, let we learn how it works.

```css
public
\_ css
    \_ base
        \_ build.css
    \_ coming-soon.css
    \_ hackathon.css
\_ fonts
    \_ ABigDeal
        \_ aBigDeal.ttf
    \_ YouTubeSans
        \_ YouTubeSansDarkBold.otf
\_ js
    \_ base
        \_ halo-iora.js
    \_ coming-soon.js
    \_ hackathon.js
\_ index.html
\_ login.html
\_ register.html
src
\_ base.css
```

Take a look to this folder structure. You may notice there is one file in css folder, the `build.css`. This file is a compiled version of `src/base.css`, and also all files imported to that file. So, what files imported to `base.css`?

The `base.css` would import tailwind and all files in `postcss`, include files in components, utilities, and page styles. For tailwind, it would follow the rules made in `tailwind.config.js` and `postcss.config.js`. But how about page styles?

Page styles must be imported to `base.css`. In the sametime, these would wreck all styling stated in every pages styling. Imagine, if we have a rules named `#hero` for `techno-conference.html`, but also has `#hero` for `hackathon.html`, what would your expectation be happend? Conflict and style merging. Yes, mess everthing up. So, to avoid the *apocalypse*, we must make a standarization how to works with compiled styles. Basically, just follow this format:

```css
/* format */
#pageName-sectionName{}

/* examples */
#tc-hero{}
```

Better, right? Now, how to mix them. We use `base.css` as the main file. Lets take a look.

```css
/* src/base.css */

/* tailwind modules */
@import "tailwindcss/base";
@import "tailwindcss/components";
@import "tailwindcss/utilities";

/* components & utilities */
@import "https://fonts.google.com/";
@import "../fonts/roboto.tff";
@import "./components/navbar.css";
@import "./utilities/colors.css";

/* page styles */
@import "./hero.css";
@import "./vc.css";
@import "./dw.css";
@import "./ht.css";
@import "./register.css";
@import "./login.css";
@import "./udb.css";
@import "./admin.css";

/* any styling and base concept */
body{
   margin:0px;
   padding:0px;
}

/* desktop*/
@media only screen and (max-width:1024){}

/* tablet */
@media only screen and (max-width:768){}

/* mobile */
@media only screen and (max-width:320){}
```

After you connect all of them, you could just build or watch it. The `css/build.css` would be there. Later, you could just assign it to your html.

```html
<link rel="stylesheet" href="/css/build.css">
```

Voila! It's all done.

Still confused? Ask us.

**Form Standarization**

Remember to encapsulate every div/element which has input that would send data to backend using `<form>` tag. Please use `<button>` instead `<div>` if it wants to interact with backend.

```html
<form id="register" action="" method="POST" enctype="application/x-www-form-urlencoded">
    <input type="text" name="table_colomn_name"
                       value="input name is same as colomn name in database">
    <button type="submit">Register</button>
</form>
```

**Javascript Standarization**

```js
var variableName = "using camelCase";
var _hiddenProps = "add underscore";

function alsoUseCamelCase(){}
function mainFunction__subFeature(){}
function function_for_technical_use(){}
```

**HTML Structure Standarization**
- Screen Size Responsiveness
- use kebab-case for naming id and class of CSS.
- use snake_case for form field `input[name="confirm_password"]`.
- use camelCase for JS variabel and function.
- use snake_case for JS serializer and props modifier.
- use PascalCase for JS class.

**Etc. Standarization**
- You MUST USE Spaces 4 as indentation
- DO NOT USE tab or anything else than 4 as indentation.

## Notes
- don't hesitate to change this readme as long as you need it
- if you use modules aren't listed above, add the list by yourself. You could ask Project Manager if you need any help
- Semantic and standarization is recommended to make us easier to track changes and fix everything up. We would be really gratefull if you did it.
- Along time ago, Chrome works well in everything. Yep E V E R Y T H I N G. As a result, it messing another browser. For example, look up about glassmorphism in Chrome and Firefox, and you would see how chrome mess in everything. So here what I suggest... Check in every browser's render engine you could use
    - Chromium: Chrome, Edge
    - Gecko: Firefox, Tor Browser
    - Webkit: Safari
    - Internet Explorer (nope), Edge legacy (well... try it)
    - Opera, Brave, etc.
    - We like to suggest just Chrome and Firefox if you mind that much.
- Dealing with Git Merge Conflict? Fix it by yourself. Solving this would help your future self. Prove me.
- I have a suprise for you all if you could make me suprised too... <br /> *Clue: key to legacy.*
- List of CDN:
  - [JSPM](https://jspm.io)
  - [UNPKG](https://unpkg.com)
  - [Skypack](https://www.skypack.dev/)
  - [jsDelivr](https://www.jsdelivr.com/)
  - [cdnjs](https://cdnjs.com/)

## Security Issue
> there is nothing to see here.

## References
- Checking supported rendering feature: https://caniuse.com/
- Test in real browser: https://www.browserstack.com/
- Git Cheatsheet: https://www.freecodecamp.org/news/git-cheat-sheet/
- Git tutorials: https://www.atlassian.com/git/tutorials/what-is-version-control

## License
> there is nothing to see here.
