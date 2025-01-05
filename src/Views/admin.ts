import { Select } from "../Components/Pages/Admin/Shared/TableForm/Select/Select";
import { TableData } from "../Components/Pages/Admin/Shared/TableData/TableData";
import { Textarea } from "../Components/Pages/Admin/Shared/TableForm/Textarea/Textarea";

import "admin-lte/dist/js/adminlte.min.js";
import "bootstrap/dist/js/bootstrap.bundle.min.js";
import "jquery/dist/jquery.min.js";

addEventListener("DOMContentLoaded", () => {
  new Select("category"); // NOSONAR
  new TableData(); // NOSONAR
  new Textarea(); // NOSONAR
});
