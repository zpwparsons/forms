import { generateClasses } from '@formkit/themes';
import { genesisIcons } from '@formkit/icons';
import myTailwindTheme from './resources/js/FormKit/tailwind-theme.js';
import { createMultiStepPlugin } from '@formkit/addons'
import '@formkit/addons/css/multistep'

import { defaultConfig } from '@formkit/vue'

const config = defaultConfig({
    icons: {
        ...genesisIcons,
    },
    config: {
        classes: generateClasses(myTailwindTheme),
    },
    plugins: [
        createMultiStepPlugin(),
    ],
});

export default config;
