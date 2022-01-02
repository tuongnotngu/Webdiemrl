#include<bits/stdc++.h>
using namespace std;
int check (string a)
{
    int dem=0;
    for (int i=0;i<=a.size();i++)
    {
        if (a[i] == a[i+1]) dem++;
        if (a[i] != a[i+1]) a[i] = a[i+1];
    }
    cout<<dem;
}
int main ()
{
    freopen ("repetitions.inp","r",stdin);
    freopen ("repetitions.out","w",stdout);
    string s;
    cin>>s;

    check(s);
}
