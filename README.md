# Subscriptions Manager
=====================

The **Subscription Manager** system is a portal that is built to *manage* 
User Subscriptions through **Digital Closuxe** website. **Digital Closuxe** 
will, itself, be a website built using **WordPress**.

The idea is to have this *portal* built as a standalone **Single Page 
Application(SPA)** that can then be integrated with **WordPress** at a 
later stage as a **Theme**.

## Background

Recently I have found myself diving deep into a system built on top of **AngularJS** using
version 1.6.x. I had a desire to learn this **framework** during my spare time. Furthermore, 
this application was meant to be part of a larger system I intended to *commission* as 
part of my partial fulfilment to Bachelor of Technology Degree in Software Development.

Due to life constraints I do not think that this project will go through that route. I, 
however, do have bigger plans for the work contained in this repository as part of the 
*research* I'll continue executing for the benefit of my **Character Development**.

## Running the Demo

- Clone this repository

- Run `yarn install` to install all dependencies

Once you have all the *dependencies* install you can bring your development server up.

- Run `yarn build` to build your application

```bash
$ yarn build
yarn run v1.21.1
$ webpack
Hash: 0d9788c75b73288b28c6
Version: webpack 4.41.5
Time: 1362ms
Built at: 01/07/2020 7:48:26 AM
        Asset       Size  Chunks             Chunk Names
app.bundle.js   1.35 MiB     app  [emitted]  app
   index.html  387 bytes          [emitted]  
Entrypoint app = app.bundle.js
[./assets/views/layout/default.html] 149 bytes {app} [built]
[./src/app.js] 711 bytes {app} [built]
    + 2 hidden modules
Child HtmlWebpackCompiler:
     1 asset
    Entrypoint HtmlWebpackPlugin_0 = __child-HtmlWebpackPlugin_0
    [./node_modules/html-webpack-plugin/lib/loader.js!./public/index.html] 398 bytes {HtmlWebpackPlugin_0} [built]
✨  Done in 3.02s.
```

NB: The code-base is already configured with **Webpack Dev Server** running on port `2020`. To 
    be able to access the website please start the DEV server.
    
- `yarn start` and visit `localhost:2020`

The command above should pretty much give you output that looks as shown below:

```bash
$ yarn start
yarn run v1.21.1
$ webpack-dev-server
ℹ ｢wds｣: Project is running at http://localhost:2020/
ℹ ｢wds｣: webpack output is served from /
ℹ ｢wds｣: Content not from webpack is served from ./public/
ℹ ｢wdm｣: Hash: dc82a843b0c9b0664aed
Version: webpack 4.41.5
Time: 1412ms
Built at: 01/07/2020 7:56:51 AM
        Asset       Size  Chunks             Chunk Names
app.bundle.js    1.7 MiB     app  [emitted]  app
   index.html  387 bytes          [emitted]  
Entrypoint app = app.bundle.js
[0] multi (webpack)-dev-server/client?http://localhost:2020 ./src/app.js 40 bytes {app} [built]
[./assets/views/layout/default.html] 149 bytes {app} [built]
[./node_modules/angular/angular.js] 1.31 MiB {app} [built]
[./node_modules/angular/index.js] 48 bytes {app} [built]
[./node_modules/ansi-html/index.js] 4.16 KiB {app} [built]
[./node_modules/strip-ansi/index.js] 161 bytes {app} [built]
[./node_modules/webpack-dev-server/client/index.js?http://localhost:2020] (webpack)-dev-server/client?http://localhost:2020 4.29 KiB {app} [built]
[./node_modules/webpack-dev-server/client/overlay.js] (webpack)-dev-server/client/overlay.js 3.51 KiB {app} [built]
[./node_modules/webpack-dev-server/client/socket.js] (webpack)-dev-server/client/socket.js 1.53 KiB {app} [built]
[./node_modules/webpack-dev-server/client/utils/createSocketUrl.js] (webpack)-dev-server/client/utils/createSocketUrl.js 2.91 KiB {app} [built]
[./node_modules/webpack-dev-server/client/utils/log.js] (webpack)-dev-server/client/utils/log.js 964 bytes {app} [built]
[./node_modules/webpack-dev-server/client/utils/reloadApp.js] (webpack)-dev-server/client/utils/reloadApp.js 1.59 KiB {app} [built]
[./node_modules/webpack-dev-server/client/utils/sendMessage.js] (webpack)-dev-server/client/utils/sendMessage.js 402 bytes {app} [built]
[./node_modules/webpack/hot sync ^\.\/log$] (webpack)/hot sync nonrecursive ^\.\/log$ 170 bytes {app} [built]
[./src/app.js] 711 bytes {app} [built]
    + 21 hidden modules
Child HtmlWebpackCompiler:
     1 asset
    Entrypoint HtmlWebpackPlugin_0 = __child-HtmlWebpackPlugin_0
    [./node_modules/html-webpack-plugin/lib/loader.js!./public/index.html] 398 bytes {HtmlWebpackPlugin_0} [built]
ℹ ｢wdm｣: Compiled successfully.

```