describe('index persons', () => {
    it('testing web persons', () => {
        cy.visit('http://127.0.0.1:8000/pracownicy')
        cy.get('body > div > div > div > div.row.people.d-flex.justify-content-center > div:nth-child(2) > div > div').click()
        cy.get('#about > div > div > div.col-lg-6.col-md-6.col-sm-12.col-xs-12.desc > div > h1')
            .should('have.text', 'Dane o pracowniku:')

        cy.get('body > div > div > div > div.card-header > ul > li:nth-child(2) > a').click()
        cy.get('#about > div > div > div.col-lg-6.col-md-6.col-sm-12.col-xs-12.desc > div > h1')
            .should('have.text', 'Sekcja dydaktyczna')

        cy.get('body > div.backgroundLayout.pb-5.pt-5 > div > div > div.card-header > ul > li:nth-child(3) > a').click()
        cy.get('#about > div > div > div.col-lg-6.col-md-6.col-sm-12.col-xs-12.desc > div > h1')
            .should('have.text', 'Sekcja naukowa')

        cy.get('body > div > div > div > div.card-header > ul > li:nth-child(4) > a').click()
        cy.get('#about > div > div > div.col-lg-6.col-md-6.col-sm-12.col-xs-12.desc > div > h1')
            .should('have.text', 'Sekcja organizacyjna')

    })
})
