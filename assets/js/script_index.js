// script.js
document.addEventListener('DOMContentLoaded', function() {
    const menuData = {
        "Brunch (8h00-15h00)": [
            { "nom": "Oeufs brouillés",  "description": "Pain toasté, oeufs brouillés", "prix": "8.5" },
            { "nom": "Oeufs brouillés truffés", "description": "Pain toasté, oeufs brouillés, crème de truffe","prix": "14" },
            { "nom": "Bun OB", "description": "Bagel, oeufs brouillés, cheddar",  "prix": "9.50" },
            { "nom": "Pancakes salés", "description": "Pancakes, oeufs brouillés, bacon, sirop d'érable",  "prix": "13.50" },
            { "nom": "Oeufs bénédictes Bacon",  "prix": "16" },
            { "nom": "Oeufs bénédictes saumon", "description": "Buns, oeufs pochés, sauce hollandaise, avocat, saumon", "prix": "16" },
            { "nom": "Avocado toast", "description": "Pain de campagne, avocat, féta, oeuf poché", "prix": "13" },
            { "nom": "Formule Breakfast", "description": "Pain beurre et confiture + viennoiserie + jus d'orange pressé + café",  "prix": "11.50" },
            { "nom": "Koul's Açai bowl", "description": "Açai, bananes, kiwi, dattes, fruits rouges, granola maison",  "prix": "9" },
            { "nom": "Granola", "description": "Fromage blanc, granola maison, beurre de cacahuète, fruits",  "prix": "9" },
            { "nom": "Pancakes chocolats", "description": "Pancakes, chocolat praliné, noix de pécan",  "prix": "9.50"},
            { "nom": "Pancakes érables", "description": "Pancakes, sirop d'érable, myrtilles, noix de pécan", "prix": "9.50"},
            { "nom": "French toast spéculos",  "description": "Pain perdu, spéculos, sirop d'érable", "prix": "9.50"},
            { "nom": "French toast caramel", "description": "Pain perdu, caramel, figues", "prix": "9.50"},
            { "nom": "French toast chocolat", "description": "Pain perdu, chocolat, fraises",  "prix": "9.50"},
            { "nom": "Banana toast", "description": "Pain toasté, beurre de cacahuète, bananes, noix de pécan",  "prix": "9.50" },

        ],
        "Lunch (11h30-19h00)": [
            { "nom": "Tartare", "description": "Tartare de bœuf, crème de féta, crème d'oeuf, noisettes, pickles d'onions rouges",  "prix": "16" },
            { "nom": "Tartare saumon",  "prix": "16" },
            { "nom": "Croque truffe", "description": "Pain de mie, comté affiné 18 mois, crème de truffe, jambon cuit",  "prix": "16"},
            { "nom": "Poulpe snaké", "description": "Poulpe snaké, houmous, paprika, pois chiches, chimichurri",  "prix": "23"},
            { "nom": "Aubergine rôtie", "description": "Aubergine rôtie, coulis de poivrons, coulis de courgettes, noisettes et siphon de burrata",  "prix": "15.50" },
            { "nom": "Rigatoni truffe", "description": "Pâtes rigatoni, crème de truffe, truffe fraîche, copeaux de parmesan",  "prix": "23"},
            { "nom": "Lamb Burger", "description": "Gigot d'agneau effiloché aux épices, chou blanc mariné à la moutarde et sauce barbecue, accompagné de frites de patates douces",  "prix": "17.50"},
            { "nom": "Salade méditerranéenne", "description": "Salade, orge perlée, artichaut, tomates rôties, aubergines grillées, olives taggiasches, mozzarella, pistou, crôutons de pain", "prix": "16" }

        ],
        "Boisson (8h00-20h00)": [
            { "nom": "Espresso","prix": "2" },
            { "nom": "Américain","prix": "2" },
            { "nom": "Décaféiné","prix": "2.20" },
            { "nom": "Noisette","prix": "2.50" },
            { "nom": "Double Espresso","prix": "3.50" },
            { "nom": "Latte","prix": "4" },
            { "nom": "Flat White","prix": "4.5" },
            { "nom": "Cappuccino","prix": "4" },
            { "nom": "Chocolat Chaud Maison","prix": "5" },

        ]
    };

    const menuContainer = document.getElementById('menu');

    for (const [key, dishes] of Object.entries(menuData)) {
        const categoryDiv = document.createElement('div');
        categoryDiv.classList.add('category');
        const categoryTitle = document.createElement('h2');
        categoryTitle.textContent = key;
        categoryDiv.appendChild(categoryTitle);

        const dishesDiv = document.createElement('div');
        dishesDiv.classList.add('dishes');

        dishes.forEach(dish => {
            const dishDiv = document.createElement('div');
            dishDiv.classList.add('dish');
            dishDiv.innerHTML = `<strong>${dish.nom}</strong> - ${dish.description || ''} <span class="price">${dish.prix}€</span>`;
            dishesDiv.appendChild(dishDiv);
        });

        categoryDiv.appendChild(dishesDiv);
        menuContainer.appendChild(categoryDiv);
    }
});