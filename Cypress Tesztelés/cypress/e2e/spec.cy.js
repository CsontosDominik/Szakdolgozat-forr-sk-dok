describe('template spec', () => {
  it('test', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.viewport(1280, 800)
  })
  it('regisztráció hibás adatokkal', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.viewport(1280, 800)
    cy.get('a[href*="register"]').click();
    cy.get('input[name=username]').type('teszt');
    cy.get('input[name=firstname]').type('te');
    cy.get('input[name=lastname]').type('teszt');
    cy.get('input[name=email]').type('teszt@teszt.com');
    cy.get('input[name=password]').type('teszt');
    cy.get('input[name=password_confirmation]').type('teszt');
    cy.get('button[type=submit]').click();
  })
  it('bejelentkezés nem megfelelő adatokkal', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.viewport(1280, 800)
    cy.get('a[href*="login"]').click();
    cy.get('input[name=username]').type('teszt');
    cy.get('input[name=password]').type('teszt');
    cy.get('button[type=submit]').click();
  })
  it('bejelentkezés megfelelő adatokkal', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.viewport(1280, 800)
    cy.get('a[href*="login"]').click();
    cy.get('input[name=username]').type('brandy75');
    cy.get('input[name=password]').type('password');
    cy.get('button[type=submit]').click();
    cy.get('button[type=submit]').click();
  })
  it('regisztráció megfelelő adatokkal', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.viewport(1280, 800)
    cy.get('a[href*="register"]').click();
    cy.get('input[name=username]').type('cypress');
    cy.get('input[name=firstname]').type('cypress');
    cy.get('input[name=lastname]').type('cypress');
    cy.get('input[name=email]').type('cypress@cypress.com');
    cy.get('input[name=password]').type('cypress');
    cy.get('input[name=password_confirmation]').type('cypress');
    cy.get('button[type=submit]').click();
    cy.get('button[type=submit]').click();
  })
  it('bejelentkezés és kurzus megnyitása', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.viewport(1280, 800)
    cy.get('a[href*="login"]').click();
    cy.get('input[name=username]').type('cypress');
    cy.get('input[name=password]').type('cypress');
    cy.get('button[type=submit]').click();
    cy.get('a[href*="word"]').click();
  })
  it('bejelentkezés éadminként és felhasználó módosítása', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.viewport(1280, 800)
    cy.get('a[href*="login"]').click();
    cy.get('input[name=username]').type('admin');
    cy.get('input[name=password]').type('Sakkmatt01');
    cy.get('button[type=submit]').click();
    cy.get('a[href*="manage"]').click();
    cy.get('a[href*="users/edit/26"]').click();
    cy.get('input[name=lastname]').type('cypress2');
    cy.get('button[name=save]').click();
  })
})