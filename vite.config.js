import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
// import { folderInput } from 'rollup-plugin-folder-input' // 讓 buil.rollupOptions.input 可以接受 dir
// import path from 'path'

export default defineConfig({
  plugins: [
    vue()
  ],
  build: {
    rollupOptions: {
      input: {
        app: 'index.html',
        // style: './resources/css/app.css',
      },
    },
    manifest: true,
    outDir: './assets/dist', // vite 輸出路徑，相對於 root
    assetsDir: '', // vite 輸出資料夾，相對於 outDir，專案省略讓 static 資料夾不會被清空及覆蓋
    emptyOutDir: true,
    sourcemap: true,
    assetsInlineLimit: 0 // 多少容量的資源編碼為 base64
  },
  publicDir: false
})
