# Laravel Project: API Development with Database Design

## Project Overview

This project is a RESTful API developed using the Laravel framework. It is designed to provide functionalities such as user management, role-based access control, category management, article creation, and media uploads. The API is built with a focus on performance, security, and scalability.

The API structure and its functionalities follow the database schema, ensuring consistency and proper data handling.

## Database Design

The database design follows a structured, normalized approach to efficiently manage relationships between entities such as users, roles, categories, authors, articles, and tags. The database schema was created based on this design: [Database Diagram](https://dbdiagram.io/d/66e298276dde7f4149de9e67).

The main tables include:
- **Users**: Stores user information such as name, email, and password.
- **Roles**: Defines the roles for access control.
- **Categories**: Manages categories for articles.
- **Authors**: Contains author details.
- **Articles**: Stores articles with their content, relationships with authors, categories, and tags.
- **Tags**: Manages tags for articles.
- **Upload Media**: Handles media files uploaded to the system.

### ER Diagram Overview

The diagram illustrates the relationships between the core entities in the database schema. Each entity is related to others through one-to-many or many-to-many relationships, ensuring a well-organized data structure.

To view the complete database design, you can access the diagram here: [Database Diagram](https://dbdiagram.io/d/66e298276dde7f4149de9e67).

## Features

- **User Authentication**: JWT-based authentication system for secure login.
- **Role-Based Access Control**: Users are assigned roles such as `admin`, `editor`, or `author`, which determine their access to specific API endpoints.
- **Article Management**: Create, read, update, and delete (CRUD) operations for articles.
- **Category and Tag Management**: API endpoints for managing categories and tags.
- **File Upload**: Endpoints for uploading media files and associating them with articles.
- **Search and Filter**: Search articles by title, author, or category, and filter by tags.
