// resources/js/components/UsersTable.jsx

import React, { useEffect, useState } from 'react';
import axios from 'axios';

const UsersTable = () => {
    const [users, setUsers] = useState([]);

    useEffect(() => {
        axios.get('/api/users')
            .then(response => {
                setUsers(response.data);
            })
            .catch(error => {
                console.error('There was an error fetching the users!', error);
            });
    }, []);

    return (
        <div className="container">
            <h1>Users</h1>
            <a href="/users/create" className="btn btn-primary">Create User</a>
            <table className="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {users.map(user => (
                        <tr key={user.id}>
                            <td>{user.name}</td>
                            <td>{user.email}</td>
                            <td>{user.roles.length > 0 ? user.roles[0].name : 'No Role'}</td>
                            <td>
                                <a href={`/users/${user.id}/edit`} className="btn btn-warning">Edit</a>
                                <form action={`/users/${user.id}`} method="POST" style={{ display: 'inline-block' }}>
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <input type="hidden" name="_token" value={document.querySelector('meta[name="csrf-token"]').content} />
                                    <button type="submit" className="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default UsersTable;
