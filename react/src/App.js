import { Provider } from "./Context";
import Form from "./components/Form";
import UserList from "./components/UserList";
import { Actions } from "./Actions";
function App() {
  const data = Actions();
  return (
    <Provider value={data}>
      <div className="App">
        <h1>List of Students</h1>
        <div className="wrapper">
          <section className="left-side">
            <Form />
          </section>
          <section className="right-side">
            <UserList />
          </section>
        </div>
        <div>
          <form action="http://localhost:8000/" method="post">
            <button type="submit" class="btn logout">
              Logout
            </button>
          </form>
        </div>
      </div>
    </Provider>
  );
}

export default App;
