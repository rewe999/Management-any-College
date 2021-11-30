describe('admin login', () => {
    it('testing admin login', () => {
        cy.visit('http://127.0.0.1:8000/admin/login')
        cy.get('#email').type('admin@admin.pl')
        cy.get('#password').type('admin@admin.pl')
        cy.get('body > div > section > div > div > div > div > div > div > form > button').click()
        cy.get('#accordionSidebar > li.nav-item.active > a > span').click()
        cy.get('#navbarDropdownMenuLink').click()
        cy.get('#navbarNavDropdown > ul > li:nth-child(5) > div > a:nth-child(2)').click()
    })
})
