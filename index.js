document.addEventListener('DOMContentLoaded', function () {
    const inputNumber = document.getElementById("inputNumber");
    const addItemBtn = document.getElementById("addItemBtn");
    const sortBtn = document.getElementById("sortBtn");
    const integerList = document.getElementById("integerList");
    const sortedListContainer = document.getElementById("sortedList");
    const sortedIntegerList = document.getElementById("sortedIntegerList");

    let inputNumbers = [];

    addItemBtn.addEventListener("click", addItem);
    sortBtn.addEventListener("click", sortList);

    function addItem() {
        const inputValue = inputNumber.value.trim();
    
        // Check if the entered value is a valid integer
        if (!Number.isInteger(parseInt(inputValue))) {
            alert("Please enter a valid integer.");
            return;
        }
    
        const number = parseInt(inputValue);
        inputNumbers.push(number);
    
        const listItem = document.createElement("li");
        listItem.textContent = number;
        integerList.appendChild(listItem);
    
        inputNumber.value = "";
    }
    

    function updateSortedList() {
        let sortedArray = [...inputNumbers];
        let n = sortedArray.length;
    
        for (let i = 0; i < n - 1; i++) {
            for (let j = 0; j < n - i - 1; j++) {
                if (sortedArray[j] > sortedArray[j + 1]) {
                    // Swap the elements
                    let temp = sortedArray[j];
                    sortedArray[j] = sortedArray[j + 1];
                    sortedArray[j + 1] = temp;
                }
            }
        }
    
        sortedIntegerList.innerHTML = "";
        sortedArray.forEach(number => {
            const listItem = document.createElement("li");
            listItem.textContent = number;
            sortedIntegerList.appendChild(listItem);
        });
    }
    
    function sortList() {
        updateSortedList();
        sortedListContainer.style.display = "block";
    }
});
