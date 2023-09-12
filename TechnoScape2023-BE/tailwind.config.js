// /** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            cBgDark: "#010101",
            cBlack: "#0A0A0A",
            cWhite: "#F4F4F4",
            cYellow: "#F9F007",
            cYellow2: "#FFFD96",
            cYellow3: "#FFF52F",
            cGrey: "#F4F4F41A",
            cRed: "#FF3E3E",
            cRed2: "#F93636",
            cRed3: "#FF6E6E",
            cBlue2: "#246FFF",
            cBlue3: "#003FBA",
            cGreen2: "#36F96D",
            cGreen3: "#6EFF96",
            cGray2: "#FAFAFF",
            cGrayInput: "#F3F3F3",
            cBlack2: "#1B1B1B",
            cBlack3: "#121212",
            cBlack4: "#2B2B2B",
            transparent: "transparent",
            tcRed: "#FF3E3E",
            cProfileCard: "#2F2F2F",
        },
        boxShadow: {
            bsInput: "5px 7px 25px 5px rgba(213, 213, 213, 0.16)",
            bsBlueBtn: "0px 0px 12px 2px #246FFF",
            bsBtnTC: "5px 7px 25px 5px rgba(249, 54, 54, 0.4)",
            bsBtn: "5px 7px 25px 5px rgba(32, 108, 255, 0.4)",
            bsBtnYellow: "5px 7px 25px 5px rgba(255, 245, 47, 0.4)",
            bsBtnRed: "5px 7px 25px 5px rgba(255, 110, 110, 0.4)",
            bsBtnBlue: "5px 7px 25px 5px rgba(0, 63, 186, 0.4)",
            tcBtnRed: "0px 0px 12px 2px #FF3E3E",
            tcBtnBlue: "0px 0px 12px 2px #246FFF",
            bsSponsor: "inset 0px 20px 40px rgba(0, 0, 0, 0.4)",
            bsRedBtn: "0px 0px 12px 2px #FF3E3E",
            bsYellowBtn: "0px 0px 12px 2px #FFFD96",
            bsSignUp: "inset 0px 20px 40px rgba(0, 0, 0, 0.4)",
        },
        extend: {
            backgroundImage: {
                cLinearGradientBg:
                    "radial-gradient(763.89% 1810.97% at -18.02% 50%, #010101 0%, #454545 100%)",
                cLinearGradientAsk:
                    "radial-gradient(623.72% 1478.67% at 81.74% 50%, #010101 0%, #454545 100%)",
                cLinearGradientRed:
                    "linear-gradient(90.13deg, #FF4040 1.12%, #CB1515 100%)",
                cLinearGradientBlue:
                    "linear-gradient(90.13deg, #206CFF 0%, #0000FB 99.97%)",
                hackLinearGradient:
                    "linear-gradient(95.42deg, #246FFF 8.59%, #075BFF 66.82%, #003FBA 111.66%)",
                taLinearGradient:
                    "linear-gradient(89.97deg, #FFFD96 -134.04%, #FFF52F 99.98%)",
                tcLinearGradient:
                    "linear-gradient(270deg, #F93636 0%, #FF6E6E 200%)",
                cLinearGradientBtn:
                    "linear-gradient(96.72deg, #246FFF -0.05%, #075BFF 64.08%, #003FBA 113.46%)",
                cLinearGradientBtn2:
                    "linear-gradient(to right, #246FFF, #003FBA, #246FFF)",
                cLinearGradientRed2:
                    "linear-gradient(270deg, #F93636 0%, #FF6E6E 100%)",
                tcBackground:
                    "url('/public/assets/techno-conference/tc-bg.svg')",
                tcLinearGradientWhiteRed:
                    "linear-gradient(270deg, #F93636 0%, #FF6E6E 100%) ",
                tcLinearGradientWhiteRedWhite:
                    "linear-gradient(to right, #FF6E6E, #F93636, #FF6E6E) ",
                tcLinearGradientRedWhite:
                    "linear-gradient(270deg, #FF6E6E 0%, #F93636 100%) ",
                tcLinearGradientBlue:
                    "linear-gradient(to right, #246FFF, #003FBA, #246FFF)",
                cLinearGradientYellow:
                    "linear-gradient(90deg, #FFFD96 0%, #FFF52F 100%)",
                cLinearGradientBtnYellow:
                    "linear-gradient(to right, #FFFD96, #FFF52F, #FFF74D)",
                cLinearGradientBtnBlue:
                    "linear-gradient(to right, #246FFF, #003FBA, #246FFF)",
                cLinearGradientGreen:
                    "linear-gradient(270deg, #36F96D 0%, #6EFF96 100%)",
                cLinearGradientBtnRed:
                    "linear-gradient(to right, #FF6E6E, #F93636, #FF6E6E)",
                cLinearGradientUpcommingtask:
                    "linear-gradient(270deg, #F93636 0%, #FF6E6E 100%)",
                cLinearGradientRedTittle:
                    "linear-gradient(270deg, #F93636 0%, #FF6E6E 100%)",
            },

            fontFamily: {
                YSBlack: ["YSBlack"],
                YSBold: ["YSBold"],
                YSDarkBlack: ["YSDarkBlack"],
                YSDarkBold: ["YSDarkBold"],
                YSDarkExtraBold: ["YSDarkExtraBold"],
                YSDarkLight: ["YSDarkLight"],
                YSDarkMedium: ["YSDarkMedium"],
                YSDarkRegular: ["YSDarkRegular"],
                YSDarkSemiBold: ["YSDarkSemiBold"],
                YSExtraBold: ["YSExtraBold"],
                YSLight: ["YSLight"],
                YSMedium: ["YSMedium"],
                YSRegular: ["YSRegular"],
                YSSemiBold: ["YSSemiBold"],
                ABigDeal: ["ABigDeal"],
            },
            boxShadow: {
                bsInput: "5px 7px 25px 5px rgba(213, 213, 213, 0.16)",
                bsBtn: "9px 11px 29px 7px rgba(104, 149, 235, 0.26)",
                bsBox: "4px 5px 20px rgba(103, 103, 103, 0.15)",
            },
            keyframes: {
                float: {
                    "0%, 100%": { transform: "translateY(0px)" },
                    "50%": { transform: "translateY(-16px)" },
                },

                slideLeft: {
                    from: { transform: "translateX(0)" },
                    to: { transform: "translateX(calc(18rem * 7))" },
                },
            },
            animation: {
                "float-slow": "float 5s ease-in-out infinite",
                "slide-left": "slideLeft 20s infinite linear",
            },
        },
    },
    plugins: [],
};
