import faker from 'faker';

describe('add new print', () => {
    it('testing add new print', () => {
        cy.visit('http://127.0.0.1:8000/admin/login')
        cy.get('#email').type('admin@admin.pl')
        cy.get('#password').type('admin@admin.pl')
        cy.get('body > div > section > div > div > div > div > div > div > form > button').click()

        cy.get('#accordionSidebar > li:nth-child(7) > a').click()
        cy.get('#collapsePeoples > div > a:nth-child(2)').click()


        const title = faker.name.title()
        const name = faker.name.firstName()
        const surname = faker.name.lastName()
        const section = faker.name.jobArea()
        const position = faker.name.jobType()
        const email = faker.internet.email()
        const url = faker.internet.url()

        cy.get('#title').type(title)
        cy.get('#name').type(name)
        cy.get('#surname').type(surname)
        cy.get('#section').type(section)
        cy.get('#position').type(position)
        cy.get('#email').type(email)
        cy.get('#url').type(url)

        cy.get('#content > div > div > div > form > button').click()
    })
})
