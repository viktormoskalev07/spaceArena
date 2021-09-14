(function () {
    const tabActivators = document.querySelectorAll(".tab_activator");
    const tabChilds = document.querySelectorAll(".tab_child");
    tabActivators.forEach((tabActivator) => {
        tabActivator.addEventListener('click', function (e) {
            tabActivators.forEach((tabActivator2) => {
                tabActivator2.classList.remove('active')
            })
            e.target.classList.add('active')
            tabChilds.forEach((tabChild) => {
                if (e.target.dataset.tab == tabChild.dataset.tab) {
                    tabChild.classList.add('active')
                } else {
                    tabChild.classList.remove('active')
                }
            })
        })
    })
}())