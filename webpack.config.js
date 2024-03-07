const path = require('path');

module.exports = {
    mode: 'development',
    entry: './src/js/index.js',
    output: {
        filename: "main.js",
        path: path.resolve(__dirname, "wp-content/themes/ilios_2024_2/build"),
    },
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/i,
                use: [
                    "style-loader",
                    "css-loader",
                    {
                        loader: "sass-loader",
                        options: {
                            sassOptions: {
                                indentWidth: 4,
                            },
                        },
                    },
                ],
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            }
        ],
    },
}