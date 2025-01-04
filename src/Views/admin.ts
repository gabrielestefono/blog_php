import { Select } from "../Components/Pages/Admin/Shared/TableForm/Select/Select";
import "admin-lte/dist/js/adminlte.min.js";
import "bootstrap/dist/js/bootstrap.bundle.min.js";
import { TableData } from "../Components/Pages/Admin/Shared/TableData/TableData";

addEventListener("DOMContentLoaded", () => {
  new Select("category"); // NOSONAR
  new TableData(); // NOSONAR
});
