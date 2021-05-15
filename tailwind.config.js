// This file controls how Tailwind processes your CSS. For details, see
// https://tailwindcss.com/docs/configuration

module.exports =
{
  //
  // WARNING: CodeKit overwrites all properties of the "purge" object (except those below) with values from the UI.
  // Visit [Project Settings > Tools > PurgeCSS] to specify content and options. The values below can be
  // uncommented and edited if needed; all others are controlled by CodeKit.
  //
  purge: {
    content: [
      '!./**/({node_modules,vendor})/**/*.html',
      '!./**/({node_modules,vendor})/**/*.blade.php'
    ],
  },

  //
  // All other TailwindCSS options are 100% under your control. Edit this config file as shown in the Tailwind Docs
  // to enable the settings or customizations you need.
  //
  theme: {
    container: {
      center: true,
    },
    zIndex: {
      '0': 0,
      '1': 1,
      '2': 2,
      '3': 3,
      '4': 4,
      '5': 5,
      '6': 6,
      '7': 7,
      '8': 8,
      '9': 9,
      '10': 10,
      '11': 11,
      '12': 12,
      '13': 13,
      '14': 14,
      '15': 15,
      '16': 16,
      '17': 17,
      '18': 18,
      '19': 19,
      '20': 20,
      '30': 30,
      '40': 40,
      '50': 50,
      '25': 25,
      '50': 50,
      '60': 60,
      '70': 70,
      '80': 80,
      '90': 90,
      '100': 100,
      'auto': 'auto',
    },
    extend: {
      colors: {
        primary: {
          light: "#0869da", // For lighter primary color
          DEFAULT: "#1a3ed6", // Normal primary color
          dark: "#023eb9", // Used for hover, active, etc.
        }
      },
      width: {
        '1/7': '14.2857143%',
        '2/7': '28.5714286%',
        '3/7': '42.8571429%',
        '4/7': '57.1428571%',
        '5/7': '71.4285714%',
        '6/7': '85.7142857%',
      }
    }
  },

  variants: {},

  //
  // If you want to run any Tailwind plugins (such as 'tailwindcss-typography'), simply install those into the Project via the
  // Packages area in CodeKit, then pass their names (and, optionally, any configuration values) here.
  // Full file paths are not necessary; CodeKit will find them.
  //
  plugins: [
    require("kutty"),
    require("@tailwindcss/forms"),
    require("@tailwindcss/typography")
  ]
}
