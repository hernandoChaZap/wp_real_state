import { resolve } from 'path'
import { defineConfig } from 'vite'

 export default defineConfig({
    base: '/',
    build: {
        outDir: resolve(__dirname, 'dist'),
        rollupOptions: {
            input: {
                custom: resolve(__dirname, 'src/css/custom.scss'),
                scripts: resolve(__dirname, 'src/js/scripts.js')
            },
            
            output: {
                entryFileNames: 'js/[name].js',
                assetFileNames: fileInfo => {
                    if( fileInfo.name.endsWith('.css') ){
                        return `css/${fileInfo.name}`
                    }
                    return fileInfo.name
                }
            }
        }
    },
    root: resolve(__dirname),
    plugins: [
        {
            name: 'php',
            handleHotUpdate({ file, server }){
                if( file.endsWith('.php') ){
                    server.ws.send({ type:'full-reload' })
                }
            }
        }
    ],
    server: {
        host:'localhost',
        port:5173,        
    }
 })