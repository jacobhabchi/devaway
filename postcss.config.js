module.exports = {
    plugins: [
      require('tailwindcss'),
      require('autoprefixer'),
      require('postcss-watch-folder')({
        folder: './app/Views', // The folder to watch for changes
        main: './app/Views/css/input.css', // The main CSS file to process
      }),
    ],
  };
  