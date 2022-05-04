import scss from 'rollup-plugin-scss'
import postcss from 'postcss'
import autoprefixer from 'autoprefixer'
import { babel } from '@rollup/plugin-babel'
import { nodeResolve } from '@rollup/plugin-node-resolve'
import { terser } from "rollup-plugin-terser"

export default [{
    input: 'wp-content/themes/shantal-base-theme/assets/js/main.js',
    output: {
      format: 'esm',
      file: 'wp-content/themes/shantal-base-theme/assets/js/bundle.js'
    },
    watch: {
        include: ['wp-content/themes/shantal-base-theme/components/**', 'wp-content/themes/shantal-base-theme/assets/scss/**'],
        clearScreen: false
    },
    plugins: [
        scss({
            output: 'wp-content/themes/shantal-base-theme/assets/css/bundle.css',
            prefix: `@import "wp-content/themes/shantal-base-theme/assets/scss/main.scss";`,
            processor: () => postcss([autoprefixer()]),
            outputStyle: 'compressed',
            watch: ['wp-content/themes/shantal-base-theme/components', 'wp-content/themes/shantal-base-theme/assets/scss']
        }),
        babel({ babelHelpers: 'bundled' }),
        nodeResolve(),
        //terser()
    ]
}];