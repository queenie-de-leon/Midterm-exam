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

### Follow these simple steps to set up and run the project locally:
- **1. Start XAMPP →** Run Apache and MySQL.
- **2. Create Database →** Go to phpMyAdmin
 and make a new database. 
- **3. Open in VS Code →** Open your Laravel project folder. 
- **4. Install Dependencies:**
    - composer install
    - npm install
- **5. Set Up Environment File:**
    - cp .env.example .env
    - php artisan key:generate
- **6. Edit .env Database Settings:**
    - DB_DATABASE=inventory_db
    - DB_USERNAME=root
    - DB_PASSWORD=
- **7. Run Migrations (if needed):**
    - php artisan migrate
- **8. Start the Server:**
    - php artisan serve
- **9. Open your browser → http://127.0.0.1:8000
 🎉**

---

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

![Dashboard Overview](https://github.com/queenie-de-leon/Midterm-exam/blob/main/screenshots/Dashboard.png)
*Dashboard displaying total inventory value, categories, and stock overview.*

![Products Panel](https://github.com/queenie-de-leon/Midterm-exam/blob/main/screenshots/Products.png)
*Add, view, edit, or delete products.*

![Categories Panel](https://github.com/queenie-de-leon/Midterm-exam/blob/main/screenshots/Categories.png)  
*Add, view, edit, or delete product categories with descriptions.* 

![Transactions Panel](https://github.com/queenie-de-leon/Midterm-exam/blob/main/screenshots/Transactions.png)  
*Record stock in/out transactions.*

![Reports Section](https://github.com/queenie-de-leon/Midterm-exam/blob/main/screenshots/Reports.png)  
*Reports showing low stock, recent transactions, and category summaries.*

---

## 👩‍💻 Contributors

- **Queenie A. De Leon** — Developer 
- **Thea Emerald A. Sangayab** — Collaborator

---

## ⚖️ License

This project is licensed under the **MIT License**.  
You are free to use, modify, and distribute this software with attribution to the original author.


