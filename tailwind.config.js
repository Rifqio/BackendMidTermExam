module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: 
    {
      center:true,
      padding:"1rem",
    },
    fontFamily: 
    {
      Inter: ["Inter, sans-serif"],
    },
    extend: 
    {
      colors : 
      {
          "secondary": "#f6ae3b",
          "brand-blue": "#3be0f6",
          "brand-orange": "#f6513b",
          "brand-dark-orange": "#dd7061"
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
