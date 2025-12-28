import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          yellow: '#FFC800', // Dikkat çeken sarı
          dark: '#0B1120',   // Ana zemin (Gece mavisi/Siyah)
          surface: '#1E293B', // Kartlar
          gray: '#94A3B8',    // Metinler
          white: '#FFFFFF',
        }
      },
      fontFamily: {
        display: ['Sora', 'sans-serif'],
        // Varsayılan fontları koruyarak Inter'i başa ekledik (Daha güvenli)
        sans: ['Inter', ...defaultTheme.fontFamily.sans], 
      },
      boxShadow: {
        'neon': '0 0 20px rgba(255, 200, 0, 0.4)',
      },
      animation: {
        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
      },
      backgroundImage: {
         'grid-pattern': "linear-gradient(to right, #1E293B 1px, transparent 1px), linear-gradient(to bottom, #1E293B 1px, transparent 1px)",
      }
    },
  },
  plugins: [
      // İŞTE EKSİK OLAN PARÇA BU!
      // Bu olmazsa 'prose' sınıfları çalışmaz, yazılar çirkin görünür.
      require('@tailwindcss/typography'),
  ],
}