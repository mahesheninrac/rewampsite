
class Graph {
    constructor() {
        this.adjaceney = {}
    }
    addVertex(vertex) {
        if (!this.adjaceney[vertex]) {
            this.adjaceney[vertex] = []
        }
    }
    addEdge(edge1, edge2) {
        this.adjaceney[edge1].push(edge2)
        this.adjaceney[edge2].push(edge1)
    }
    deleteEdge(edge1, edge2) {
        this.adjaceney[edge1].pop(edge2)
    }
    print() {
        console.log(this.adjaceney);
    }
}
const g = new Graph()
g.addVertex("A");
g.addVertex("B");
g.addVertex("C");
g.addVertex("D");
g.addVertex("E");
g.addVertex("F");
g.addEdge("A", "B");
g.addEdge("A", "C");
g.addEdge("A", "D");
g.addEdge("A", "E");
g.addEdge("A", "F");
g.addEdge("B", "C");
g.addEdge("B", "D");
g.addEdge("B", "E");
g.addEdge("B", "F");
g.addEdge("C", "D");
g.addEdge("D", "E");
g.addEdge("E", "F");
g.addEdge("C", "F");
g.print();
g.deleteEdge("C", "F");
g.print();
