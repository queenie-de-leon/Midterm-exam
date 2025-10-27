# 📦 Inventory Management System — Midterm Exam  

## 🧭 Description / Overview  
This is a simple **Inventory Management System** built with **Laravel**, developed and edited in **VS Code**, and tested using **XAMPP (Apache + MySQL)**.  
The system tracks **products, categories, stock movements (stock in / stock out)**, and provides dashboards and reports such as **top-selling products, recent transactions, and low-stock alerts**.  

The **dashboard** shows quick summary cards and tables that help users monitor inventory health at a glance.  

---

## 🎯 Objectives  
- Implement an inventory system using **Laravel** and **MySQL**.  
- Practice **CRUD operations** (Create, Read, Update, Delete) for products and categories.  
- Track product transactions (stock in / stock out) and generate simple reports.  
- Use **Git & GitHub** for version control and **Markdown** for documentation.  
- Familiarize with **VS Code**, **XAMPP**, and the **Laravel environment setup**.  

---

## ⚙️ Features / Functionality  

### Dashboard  
- **Cards:** Total inventory value, Total stock, Total categories, Total products, Low stock count.  
- **Top Selling Products Table:** Product, Category, Total Sold.  
- **Recent Transactions Table:** Date, Product, Type (stock in/out), Quantity.  
- **Low Stock Table:** Product, Category, Stock.  

### Products Panel  
- Add new product with fields: **Name**, **Category** (select from existing categories), **Stock**, **Price**, **Description**.  
- Buttons: **Save** and **Cancel**.  
- Product table actions: **View**, **Edit**, **Delete**.  
- Description is only visible when **View** is clicked.  

### Categories Panel  
- Add new category with: **Category Name** and **Description**.  
- Buttons: **Save** and **Cancel**.  
- Table columns: Category Name, Description, and Actions (**View**, **Edit**, **Delete**).  

### Transactions Panel  
- Create a new transaction with: **Product**, **Type (Stock In / Stock Out)**, **Quantity**, and **Remarks**.  
- Date is automatically recorded.  
- Table columns: Date, Product, Type, Qty, Remarks.  

### Reports Panel  
- Shows the total number of categories and products in each category.  
- **Low Stock Report:** Product, Category, Stock.  
- **Recent Transactions:** Date, Product, Type, Qty.  

---

## 🧩 Installation Instructions (Beginner-Friendly)  

### Prerequisites  
- **XAMPP** (with Apache and MySQL running)
- **Visual Studio Code** (VS Code)  
- **Composer**  
- **PHP** (version compatible with your Laravel version)  
- **Node.js** and **npm** *(optional, for frontend assets)*  


## 📘 Usage — Quick Guide

- **Dashboard:**  
  After login, the dashboard displays summary cards and tables such as:
  - Top Selling Products  
  - Recent Transactions  
  - Low Stock  

- **Add Product:**  
  Go to **Products** → Click **Add Product** → Fill in the form *(Name, Category, Stock, Price, Description)* → Click **Save**.

- **View Product:**  
  In the **Products** table → Click **View** to see the product’s full description.

- **Edit/Delete Product:**  
  Use **Edit** to modify product details or **Delete** to remove a product.

- **Add Category:**  
  Go to **Categories** → Enter the category name and description → Click **Save**.

- **New Transaction:**  
  Go to **Transactions** → Click **New Transaction** → Select **Product**, choose **Stock In** or **Stock Out**, enter **Quantity** and **Remarks** → Click **Save**.

- **Reports:**  
  Go to **Reports** to view category counts, low-stock products, and recent transactions.

---

## 🖼️ Screenshots

> Save your images in a `screenshots/` folder inside your project, then link them below.  
> Example: `![alt text](screenshots/filename.png)`

![Dashboard Overview](screenshots/dashboard.png)  
*Dashboard displaying total inventory value, categories, and stock overview.*

![Products Panel](screenshots/products-panel.png)  
*Add, view, edit, or delete products.*

![Transactions Panel](screenshots/transactions.png)  
*Record stock in/out transactions.*

![Reports Section](screenshots/reports.png)  
*Reports showing low stock, recent transactions, and category summaries.*

---

## 👩‍💻 Contributors

- **Queenie De Leon** — Developer 
- **Thea Emerald Sangayab** — Collaborator

---

## ⚖️ License

This project is licensed under the **MIT License**.  
You are free to use, modify, and distribute this software with attribution to the original author.

---

### ⚙️ Steps to Set Up  
1. Clone or download the project folder.  
   ```bash
   git clone https://github.com/queenie-de-leon/Midterm-exam.git
   cd Midterm-exam

