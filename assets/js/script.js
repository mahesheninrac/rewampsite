// class Node {
//     constructor(value) {
//         this.value = value;
//         this.next = null
//     }
// }

// class LinkedList {
//     constructor(value) {
//         const newNode = new Node(value)
//         this.head = newNode
//         this.tail = this.head
//         this.length = 1
//     }

//     push(value) {
//         const newNode = new Node(value)
//         if (!this.head) {
//             this.head = newNode
//             this.tail = newNode
//         } else {
//             this.tail.next = newNode
//             this.tail = newNode
//         }

//         this.length++
//         return this;
//     }

//     pop() {
//         if (!this.head) return undefined

//         let temp = this.head;
//         let pre = this.head

//         while (temp.next) {
//             pre = temp
//             temp = temp.next
//         }

//         this.tail = pre
//         this.tail.next = null
//         this.length--

//         if (this.length === 0) {
//             this.head = null
//             this.tail = null
//         }

//         return temp
//     }
// }

// const ll = new LinkedList(1)
// ll.push(2)
// ll.push(3)
// // console.log("push", ll)
// ll.pop()
// // console.log("pop", ll)

function calculateRoman(roman) {
    const romanMap = {
        I: 1,
        V: 5,
        X: 10,
        L: 50,
        C: 100,
        D: 500,
        M: 1000
    }

    let total = 0;
    for (let i = 0; i < roman.length; i++) {
        const current = romanMap[roman[i]]
        const next = romanMap[roman[i + 1]]

        if (current < next) {
            total -= current
        } else {
            total += current
        }
    }

    return total
}

console.log(calculateRoman("IX"))
console.log(calculateRoman("XI"))


function delay(time) {
    return new Promise((res) => setTimeout(res, time))
}

async function example() {
    console.log("1")

    await delay(2000)

    console.log("end after 2 second")
}

example()