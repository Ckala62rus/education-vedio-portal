const state = {
    user: null,
}

export const gettersTypes = {
    user: '[auth] user',
}

const getters = {
    [gettersTypes.user]: (state) => state.user
}

export default {
    state,
    getters,
}
