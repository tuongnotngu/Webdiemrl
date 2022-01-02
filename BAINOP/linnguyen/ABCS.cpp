#include<bits/stdc++.h>
#define ll long long
using namespace std;

int main()
{
    freopen("ABCS.inp","r",stdin);
    freopen("ABCS.out","w",stdout);
    vector<ll int> a(7);
    int sum = 0;
    for (auto &i : a) cin >> i;
    sort(a.begin(),a.end());
    for (int i=0; i<=1; i++) {
        sum+=a[i];
        cout << a[i] << " ";
    }
    cout << a[6]-sum;
    return 0;
}
