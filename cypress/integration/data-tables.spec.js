context('DataTables', () => {
    it('visit data-tables route', () => {
        cy.visit('/data-tables')
            .contains('DataTables');
    })
})

