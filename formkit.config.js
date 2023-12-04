import { generateClasses } from '@formkit/themes';
import { genesisIcons } from '@formkit/icons';
import theme from '@/formkit/theme.js';
import { createMultiStepPlugin } from '@formkit/addons'
import './resources/css/formkit/multistep.css'

import { defaultConfig } from '@formkit/vue'

const config = defaultConfig({
    icons: {
        ...genesisIcons,
    },
    config: {
        classes: generateClasses(theme),
    },
    plugins: [
        createMultiStepPlugin(),
    ],
});

export default config;
