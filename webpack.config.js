let webpack = require('webpack');
let htmlWebpackPlugin = require('html-webpack-plugin');

const config = {
    mode: 'development',
    entry: {
        'app': './src/app.js'
    },
    output: {
        path: __dirname + '/dist',
        publicPath: '/',
        filename: '[name].bundle.js',
        chunkFilename: '[name].bundle.js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: [ 'babel-loader' ]
            },
            {
                test: /\.html$/,
                loader: 'raw-loader'
            }
        ]
    },
    plugins: [
        new htmlWebpackPlugin({
            template: './public/index.html',
            inject: 'body'
        })
    ],
    devServer: {
        port: 2020,
        contentBase: './public/'
    }
};

module.exports = config;