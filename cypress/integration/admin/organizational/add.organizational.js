import faker from 'faker';

describe('add new organizational', () => {
    it('testing add new organizational', () => {
        cy.visit('http://127.0.0.1:8000/admin/login')
        cy.get('#email').type('admin@admin.pl')
        cy.get('#password').type('admin@admin.pl')
        cy.get('body > div > section > div > div > div > div > div > div > form > button').click()

        cy.get('#accordionSidebar > li:nth-child(7) > a').click()
        cy.get('#collapsePeoples > div > a:nth-child(3)').click()

        cy.get('#content > div > div > div > div > table > tbody > tr > td:nth-child(5) > button').click()

        const phrase = faker.hacker.phrase()

        cy.get('body > div.backgroundLayout.pb-5.pt-5 > div > form > div.mb-3 > div > div.ck.ck-editor__main > div > p').type(phrase)

        cy.get('body > div.backgroundLayout.pb-5.pt-5 > div > form > div.text-center.pb-5 > button').click()
    })
})
