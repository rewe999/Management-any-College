describe('index persons', () => {
    it('testing web persons', () => {
        cy.visit('http://127.0.0.1:8000/pracownicy')
        cy.get('body > div > div > div > div.row.people.d-flex.justify-content-center > div:nth-child(2) > div > div').click()
        cy.get('#about > div > div > div.col-lg-6.col-md-6.col-sm-12.col-xs-12.desc > div > h1')
            .should('have.text', 'Dane o pracowniku:')
    })
})
