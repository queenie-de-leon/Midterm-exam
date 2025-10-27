# Inventory Management System — Midterm Exam

## Description / Overview
This is a simple Inventory Management System built with **Laravel**, developed and edited in **VS Code**, and tested using **XAMPP** (Apache + MySQL).  
The system tracks products, categories, stock movements (stock in / stock out), and provides dashboards and reports such as top-selling products, recent transactions, and low-stock alerts.

The dashboard shows quick summary cards and tables that help users monitor inventory health at a glance.

## Objectives
- Implement an inventory system using Laravel and MySQL.
- Practice CRUD operations (Create, Read, Update, Delete) for products and categories.
- Track product transactions (stock in / stock out) and generate simple reports.
- Use version control (Git & GitHub) and document the project with Markdown.
- Familiarize with VS Code, XAMPP, and Laravel environment setup.

## Features / Functionality
### Dashboard
- Cards: **Total inventory value**, **Total stock**, **Total categories**, **Total products**, **Low stock** count.
- **Top selling products** table: columns — *Product*, *Category*, *Total Sold*.
- **Recent transactions** table: columns — *Date*, *Product*, *Type (stock in/out)*, *Quantity*.
- **Products low on stock** table: columns — *Product*, *Category*, *Stock*.

### Products Panel
- Add new product with fields: **Name**, **Category** (select from Categories), **Stock**, **Price**, **Description**.
- Buttons: **Save** and **Cancel**.
- Product table with actions: **View**, **Edit**, **Delete**.
- Description is visible when **View** is clicked (not shown in the table).

### Categories Panel
- Add category with fields: **Category Name**, **Description**.
- Buttons: **Save** and **Cancel**.
- Table columns: **Category Name**, **Description**, **Actions** (View, Edit, Delete).

### Transactions Panel
- Create a new transaction with: **Product** (select), **Type** (Stock In / Stock Out), **Quantity**, **Remarks**.
- Date is auto-filled with the current date.
- Transactions table columns: **Date**, **Product**, **Type**, **Qty**, **Remarks**.

### Reports Panel
- Overview of categories and how many products each contains.
- **Low stock** report: table — *Product*, *Category*, *Stock*.
- **Recent transactions** table: *Date*, *Product*, *Type*, *Qty*.

## Installation Instructions (Beginner-friendly)
> Prerequisites: **XAMPP** installed and running (Apache + MySQL), **Composer**, **PHP** (compatible with your Laravel version), and **Node.js/npm** (optional, for frontend assets).

1. **Clone repository**
   ```bash
   git clone https://github.com/YourUsername/Midterm-exam.git
   cd Midterm-exam

