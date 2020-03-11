<script type="application/javascript" src="https://unpkg.com/react@16.0.0/umd/react.production.min.js"></script>
<script type="application/javascript" src="https://unpkg.com/react-dom@16.0.0/umd/react-dom.production.min.js"></script>
<script type="application/javascript" src="https://unpkg.com/babel-standalone@6.26.0/babel.js"></script>
<div id="root"></div>



<script src="<?= URL?>like_button.js" type="text/babel"></script>
<script type="text/babel">
const rootElement = document.getElementById('root')
// Create a function to wrap up your component
function App(){
    return(
    <div>
        <ShoppingList name="jajajs"/>
    </div>
    )
}


// Use the ReactDOM.render to show your component on the browser
ReactDOM.render(
    <App />,
    rootElement
)
</script>
