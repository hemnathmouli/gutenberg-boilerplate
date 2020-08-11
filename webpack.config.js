const path      =   require('path');
const webpack   =   require('webpack');


module.exports  =   {
    entry:  './block/index.js',
    output: {
        path: path.resolve( __dirname, 'dist' ),
        filename: 'build.js'
    },
    mode: 'development',
    watch: true,
    devtool: 'cheap-eval-source-map',
    module: {
        rules: [
            {
                use:    'babel-loader',
                test:   /\.js$/,
                exclude: /(node_modules)/
            }
        ]
    }
}