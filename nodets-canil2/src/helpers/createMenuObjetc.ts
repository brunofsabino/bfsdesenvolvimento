type MenuObjetc = '' | 'dog' | 'cat' | 'fish' | 'all'

export const objectMenu = (menu: MenuObjetc) => {
    let returnObj = {
        all: false,
        dog: false,
        cat: false,
        fish: false
    }

    if(menu !== '') {
        returnObj[menu] = true
    }

    return returnObj
}