import faker from 'faker';

describe('edit didactic', () => {
    it('testing edit didactic', () => {
        cy.visit('http://127.0.0.1:8000/admin/login')
        cy.get('#email').type('admin@admin.pl')
        cy.get('#password').type('admin@admin.pl')
        cy.get('body > div > section > div > div > div > div > div > div > form > button').click()

        cy.get('#accordionSidebar > li:nth-child(7) > a').click()
        cy.get('#collapsePeoples > div > a:nth-child(3)').click()

        cy.get('#content > div > div > div > div > table > tbody > tr:nth-child(1) > td:nth-child(4) > button').click()


        const phrase = faker.hacker.phrase()
        const url = faker.internet.url()

        cy.get('body > div.backgroundLayout.pb-5.pt-5 > div > form > div:nth-child(3) > div > div.ck.ck-editor__main > div > p').clear()
        cy.get('#url').clear()

        cy.get('body > div.backgroundLayout.pb-5.pt-5 > div > form > div:nth-child(3) > div > div.ck.ck-editor__main > div > p').type(phrase)
        cy.get('#url').type(url)

        cy.get('body > div.backgroundLayout.pb-5.pt-5 > div > form > div.text-center.pb-2 > button').click()
    })
})
