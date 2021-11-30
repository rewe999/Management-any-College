import faker from 'faker';

describe('add new print', () => {
    it('testing add new print', () => {
        cy.visit('http://127.0.0.1:8000/admin/login')
        cy.get('#email').type('admin@admin.pl')
        cy.get('#password').type('admin@admin.pl')
        cy.get('body > div > section > div > div > div > div > div > div > form > button').click()

        cy.get('#accordionSidebar > li:nth-child(6) > a').click()
        cy.get('#collapsePrints > div > a:nth-child(2)').click()


        const title = faker.name.title()
        const description = faker.commerce.productDescription()
        cy.get('#title').type(title)
        cy.get('#description').type(description)
        cy.get('#content > div > div > div > form > button').click()
    })
})
