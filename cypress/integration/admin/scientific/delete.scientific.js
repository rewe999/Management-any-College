import faker from 'faker';

describe('delete scientific', () => {
    it('testing delete scientific', () => {
        cy.visit('http://127.0.0.1:8000/admin/login')
        cy.get('#email').type('admin@admin.pl')
        cy.get('#password').type('admin@admin.pl')
        cy.get('body > div > section > div > div > div > div > div > div > form > button').click()

        cy.get('#accordionSidebar > li:nth-child(7) > a').click()
        cy.get('#collapsePeoples > div > a:nth-child(3)').click()

        cy.get('#content > div > div > div > div > table > tbody > tr > td:nth-child(3) > button').click()

        cy.get('#content > div > div > div > div.text-center > button').click()

        cy.get('#exampleModal > div > div > div.modal-footer.text-center > form > button').click()
    })
})
