describe('delete print', () => {
    it('testing delete print', () => {
        cy.visit('http://127.0.0.1:8000/admin/login')
        cy.get('#email').type('admin@admin.pl')
        cy.get('#password').type('admin@admin.pl')
        cy.get('body > div > section > div > div > div > div > div > div > form > button').click()

        cy.get('#accordionSidebar > li:nth-child(6) > a').click()
        cy.get('#collapsePrints > div > a:nth-child(3)').click()

        cy.get('#content > div > div > div > div > table > tbody > tr:nth-child(1) > td.d-flex > button').click()
        cy.get('#page-top > div.swal2-container.swal2-center.swal2-backdrop-show > div > div.swal2-actions > button.swal2-confirm.swal2-styled').click()

    })
})
