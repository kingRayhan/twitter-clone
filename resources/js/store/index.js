const { createStore } = require("vuex");
import timeline from './timeline'

export default createStore({
    modules: {
        timeline
    }
})